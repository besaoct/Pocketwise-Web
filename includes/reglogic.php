<?php

if (!isset($_SESSION['db'])) {
    header("location:./not-found");
}

if (isset($_SESSION['uname'])) {
    header("location: ./");

}
if (isset($_POST["reg"])) {

    $name = mysqli_real_escape_string($db, $_POST["name"]);
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $phone = mysqli_real_escape_string($db, $_POST["phone"]);

    $password = mysqli_real_escape_string($db, $_POST["pass"]);
    $cpassword = mysqli_real_escape_string($db, $_POST["cpass"]);
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
    $token = bin2hex(openssl_random_pseudo_bytes(15));

    $emailquery = "SELECT * FROM student WHERE email='$email'";
    $query = mysqli_query($db, $emailquery);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        $_SESSION['rmsg'] = "Email already exists.";
        header("location: ./reg.php");
    } else {
        if ($password === $cpassword) {

            $stmt = $db->prepare("INSERT INTO student(name, email, phone, pass, cpass) VALUES ( ?,  ?, ? ,?,?)");
            $stmt->bind_param("sssss", $name, $email, $phone, $pass, $cpass);
            $stmt->execute();
            if ($stmt) {
                header("location: login");
                unset($_SESSION['rmsg']);
                $_SESSION["registered"] = true;
                $_SESSION["name"] = $name;
                $_SESSION["rmsg"] = "You are registered now. Please login";
            }
            $stmt->close();


        } else {
            $_SESSION["rmsg"] = "Password doesn't match";
            header("location: reg.php");
        }
    }


} 

?>
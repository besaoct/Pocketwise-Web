<?php

if (!isset($_SESSION['db'])) {
    header("location:./not-found");

}

if (isset($_SESSION['uname'])) {
header("location: ./");

}
unset($_SESSION['msgreset']);

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $pass = mysqli_real_escape_string($db, $_POST["pass"]);

    $email_search = "SELECT * FROM student where email='$email'";
    $query = mysqli_query($db, $email_search);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount) {
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['pass'];
        $db_mail = $email_pass['email'];
        $pass_decode = password_verify($pass, $db_pass);

        if ($pass_decode && $db_mail === $email) {

            $admincheck = "SELECT * FROM student where email='$email' and admin='active'";
            $adquery = mysqli_query($db, $admincheck);
            $run = mysqli_num_rows($adquery);
            $_SESSION['islogin'] = false;
            if ($run) {
                unset($_SESSION['msg']);
                $admindata = mysqli_fetch_assoc($adquery);
                $_SESSION['adname'] = "Admin";
                $_SESSION['uname'] = $admindata['name'];
                $_SESSION['email'] = $admindata['email'];
                $_SESSION['msg'] = "YOU ARE LOGGED IN";
                $_SESSION['islogin'] = true;
            } else {
                unset($_SESSION['msg']);
                $_SESSION['uname'] = $email_pass['name'];
                $_SESSION['email'] = $db_mail;
                $_SESSION['msg'] = "YOU ARE LOGGED IN";
                $_SESSION['islogin'] = true;

            }
?>
<script>
    location.replace("./")
</script>
<?php

        } else {
            unset($_SESSION['msg']);
            $_SESSION['msg'] = "INCORRECT PASSWORD";
?>
<script>
    //  alert('incorrect Password or mail');
    location.replace("login.php")
</script>
<?php
        }
    } else {
        unset($_SESSION['msg']);
        $_SESSION['msg'] = "ENTER VALID EMAIL";
?>
<script>
    //  alert('no');
    location.replace("login.php")
</script>
<?php
    }
}



?>

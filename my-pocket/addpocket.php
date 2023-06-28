<?php
include_once('index.php');
?>


<?php
require("../db.php");

if (isset($_POST["add-pocket"])) {
    $umail =$_SESSION["email"];
    $name = mysqli_real_escape_string($db, $_POST["p_name"]);
    $cat = mysqli_real_escape_string($db, $_POST["p_category"]);
    $income = mysqli_real_escape_string($db, $_POST["p_income"]);
    $status = mysqli_real_escape_string($db, $_POST["status"]);
    $endtime =date("d.m.Y");
    $active_search = "SELECT * FROM myPockets WHERE status='active' AND  p_mail='$umail'";
    $as = mysqli_query($db, $active_search);
    $activecount = mysqli_num_rows($as);
    if ($activecount > 0) {
        $inactive = "UPDATE myPockets SET status='closed', endtime='$endtime' WHERE status='active' AND p_mail='$umail' ";
        $inactive_run = mysqli_query($db, $inactive);
        
    }
    if ($status == "active") {
        $endtime = "present";
    }
    $stmt = $db->prepare("INSERT INTO myPockets(p_mail, p_name, p_category,p_income, status, endtime) VALUES ( ?,  ?, ? ,?,?,?)");
            $stmt->bind_param("ssssss", $umail, $name, $cat, $income, $status,$endtime);
            $stmt->execute();
            if ($stmt) {
        $_SESSION["p_msg"] = "Pocket Created Successfully";
        echo '<script> alert("Pocket Created Successfully"); </script>';
        header("Location:../mypocket.php");
        }
            $stmt->close();
        } else {
    echo '<script> alert("Try again later"); </script>';
    header("Location:../mypocket.php");

}
    

?>


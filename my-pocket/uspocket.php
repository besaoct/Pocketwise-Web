<?php
require("../db.php");


if (isset($_POST['uspocket'])) {

    $status = mysqli_real_escape_string($db, $_POST["status"]);
    $id = mysqli_real_escape_string($db, $_POST["id"]);
    $umail = $_SESSION["email"];
    $etime = date("d.m.Y");

    if ($status == "active") {
        $inactive = "UPDATE myPockets SET status='closed', endtime='$etime' WHERE status='active' AND p_mail='$umail' ";
        $inactive_run = mysqli_query($db, $inactive); 
        if ($inactive_run) {
     $query = "UPDATE myPockets SET  status='$status', endtime='present' WHERE p_id=$id AND p_mail='" . $_SESSION['email'] . "'";
     $query_run = mysqli_query($db, $query);

        } 
    }else {
        $query = "UPDATE myPockets SET  status='$status', endtime='$etime'  WHERE p_id=$id AND p_mail='" . $_SESSION['email'] . "'";
        $query_run = mysqli_query($db, $query);
    }

 


    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:../mypocket.php?manage-pockets");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
} else {
    echo '<script> alert("Data Not Updated"); </script>';
    header("Location:../mypocket.php?manage-pockets");

}
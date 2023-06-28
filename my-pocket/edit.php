
<?php

//pocketEdit
require("../db.php");
if (isset($_POST['up-pocket'])) {

    $name = mysqli_real_escape_string($db, $_POST["p_name"]);
    $cat = mysqli_real_escape_string($db, $_POST["p_category"]);
    $income = mysqli_real_escape_string($db, $_POST["p_income"]);
    $status = mysqli_real_escape_string($db, $_POST["status"]);
    $endtime = "present";
    if($status=="closed"){
        $endtime = date("d.m.Y");
    }
    $query = "UPDATE myPockets SET p_name='$name', p_category='$cat', p_income='$income', status='$status', endtime='$endtime'  WHERE status='active' AND p_mail='" . $_SESSION['email'] . "'";
    $query_run = mysqli_query($db, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:../mypocket.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
} else {
    echo '<script> alert("Data Not Updated"); </script>';
    header("Location:../mypocket.php");
}
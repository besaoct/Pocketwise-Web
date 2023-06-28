<?php
require '../db.php';

if (!isset($_SESSION['uname'])) {
    header('Location:../not-found');
} else {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM myPockets WHERE p_id=$id and p_mail ='" . $_SESSION['email'] . "'";
        $dr=mysqli_query($db, $query);
        if ($dr) {
        header('location:../mypocket.php?manage-pockets');
        }else {
            header('location:../mypocket.php');
        }
    }
}
?>
<?php
require '../db.php';

if (!isset($_SESSION['uname'])) {
    header('Location:../');
} else {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM extable WHERE id=$id and p_mail ='" . $_SESSION['email'] . "'";
        $dr = mysqli_query($db, $query);
        if ($dr) {
            header('location:../mypocket.php');
        } else {
            header('location:../mypocket.php');
        }
    }
}
?>
<?php
if (!isset($_SESSION['uname'])) {
    header("location: ../login");
}

?>
<?php
require '../db.php';

if (!isset($_SESSION['adname'])) {
    header('Location:../');
} else {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM student WHERE id=$id";
        mysqli_query($db, $query);
        header('location:../admin');
    }
}
?>
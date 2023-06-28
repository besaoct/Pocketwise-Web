<?php
require("../db.php");

if (isset($_POST["add-expense"])) {
    $pid = mysqli_real_escape_string($db, $_POST["pid"]);
    $cat = mysqli_real_escape_string($db, $_POST["cat"]);
    $am = mysqli_real_escape_string($db, $_POST["expense"]);

    $stmt = $db->prepare("INSERT INTO extable( p_id, category, amount ) VALUES ( ?,  ?, ? ) ");
    $stmt->bind_param("sss", $pid, $cat, $am);
    $stmt->execute();
    if ($stmt) {
        $_SESSION["ex_msg"] = "Expense added Successfully";
        echo '<script> alert("Expense added Successfully"); </script>';
        header("Location:../mypocket.php");
    }
    $stmt->close();
} else {
    echo '<script> alert("Try again later"); </script>';
    header("Location:../mypocket.php");

}


// expense edit
if (isset($_POST['edit-expense'])) {
    $id = mysqli_real_escape_string($db, $_POST["exid"]);
    $cat = mysqli_real_escape_string($db, $_POST["cat"]);
    $am = mysqli_real_escape_string($db, $_POST["expense"]);

    $query = "UPDATE extable SET category='$cat', amount='$am' WHERE id='$id' ";
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
?>


<?php

if (!isset($db)) {
    header("location:../whatareyoudoingbro-yourphonewillbehacked-in-next24hrs");
}

// get current user
function getUser($db)
{
    $result = mysqli_query($db, "select * from student where email ='" . $_SESSION['email'] . "'");
    $data = mysqli_fetch_assoc($result);
    return $data;
}
//get all users
function getAllUsers($db)
{
    $query = "SELECT * FROM student ORDER BY id DESC";
    $run = mysqli_query($db, $query);
    $data = array();

    while ($d = mysqli_fetch_assoc($run)) {
        $data[] = $d;
    }
    return $data;
}


// get current pocket
function getActivePocket($db)
{
    $result = mysqli_query($db, "select * from myPockets where status='active' and p_mail ='" . $_SESSION['email'] . "'");
    $data = mysqli_fetch_assoc($result);
    return $data;
}




//get all expense of an active pocket of an individual
function getAllExpense($db)
{
   
    $result = mysqli_query($db, "select * from myPockets where status='active' and p_mail ='" . $_SESSION['email'] . "'");
    $mpo = mysqli_fetch_assoc($result);

    if ($mpo) {
        $query = "SELECT * FROM extable WHERE p_id='" . $mpo['p_id'] . "' ORDER BY id DESC";
        $run = mysqli_query($db, $query);
        $data = array();

        while ($d = mysqli_fetch_assoc($run)) {
            $data[] = $d;
        }
        return $data;
    }else {
        $data = array();
        return $data;
    }

}



//get all pockets of one user
function getAllPocketsOfOne($db)
{
    $query = "SELECT * FROM myPockets WHERE p_mail ='" . $_SESSION['email'] . "' ORDER BY p_id DESC";
    $run = mysqli_query($db, $query);
    $data = array();

    while ($d = mysqli_fetch_assoc($run)) {
        $data[] = $d;
    }
    return $data;
}

//get all expense of an individual
function getAllacExpense($db)
{
 
    $query = "SELECT * FROM extable ORDER BY id DESC";
    $run = mysqli_query($db, $query);
    $data = array();

    while ($d = mysqli_fetch_assoc($run)) {
        $data[] = $d;
    }
    return $data;
}



?>
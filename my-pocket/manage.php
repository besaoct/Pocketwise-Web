<?php
include_once('index.php');
?>


<?php
    if(isset($_GET['create-new'])){
    include_once('./my-pocket/form.php');

}  else if (isset($_GET['manage-pockets'])) {
    include_once('./my-pocket/allpockets.php');
} else{
    include_once('details.php');
    include_once('modals.php');
}

?>
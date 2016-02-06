<?php include('includes/header.php'); ?>
<?php
    if (isset($_GET['person'])) {
        include('wiki/'.$_GET['person'].'/wiki.php');
    } else {
        include('wiki/wiki.php');
    }
?>
<?php include('includes/footer.php') ?>
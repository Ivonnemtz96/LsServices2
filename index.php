<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Inicio';
$inicio = 'active';
include('includes/head.php');
?>

<body class="color12">
<?
if (isset($_GET)) {
  include_once("php/msg.php");
}
?>
    <div class="wrapper">
        <?php
        include('includes/header.php');
        include('modules/index.php');
        include('includes/footer.php');
        include('includes/whats.php');
        include('includes/scripts.php');
        ?>
    </div>

</body>

</html>
<?
include 'core.php';

    $delitem = $_POST['delitem'];
    $delContacts = $link ->query("DELETE FROM `contacts` WHERE `id` = '$delitem'");
    header('location:../../admin.php');
?>
<?
include 'core.php';

$delArticlesItem = $_POST['delArticlesItem'];
$delArticle = $link ->query("DELETE FROM `articles` WHERE `id` = '$delArticlesItem'");

header('location:../../admin.php');

?>
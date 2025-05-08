<?
include 'core.php';


if (isset($_POST)) {
    foreach ($_POST as $key => $value) {
        if ($key != 'article-btn') {
            if ($value == '') {
                $_SESSION['error']['admin'] = 'Не все поля заполнены';
                header('location:../../admin.php');
            } else {
                $_SESSION['error']['admin'] = '';
            }
        }
    }
    if (empty($_SESSION['error']['admin'])) {
        
        $title = $_POST['title'];
        $description = $_POST['description'];
        $descriptiondet = $_POST['descriptiondet'];
        $sticker = $_POST['sticker'];
        $image = $_FILES['image']['name'];
        $dir = "../../img/upload/" . $_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"], $dir);
        $imagedet = $_FILES['imagedet']['name'];
        $dirdet = "../../img/upload/" . $_FILES["imagedet"]["name"];
        move_uploaded_file($_FILES["imagedet"]["tmp_name"], $dirdet);
        $addArticle = $link ->query("INSERT INTO `articles`(`title`, `description`, `img`,`detail_description`, `detail_img`,`sticker`) 
        VALUES ('$title','$description','$image','$descriptiondet','$imagedet','$sticker')");
         header('location:../../admin.php');
    }
}
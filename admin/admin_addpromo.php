<?php
require_once 'scripts/config.php';
confirm_logged_in();

if (isset($_POST['submit'])) {
    //var_dump($_POST);
    //var_dump($_FILES['cover']);
    $cover = $_FILES['cover'];
//type="file" ?
    $title = $_POST['title'];
    $text  = $_POST['text'];

    $result  = addPromo($cover, $title, $text);
    $message = $result;

}

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Content for Spread Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php if (!empty($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif;?>
    <form action="admin_addpromo.php" method="post" enctype="multipart/form-data">
        <label for="cover">Cover Image:</label>
        <input type="file" name="cover" id="cover" value=""><br><br>

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value=""><br><br>

        <label for="story">Description:</label>
        <textarea name="text" id="story">
        </textarea><br><br>



        <button type="submit" name="submit">Add Content</button>
    </form>
</body>
</html>
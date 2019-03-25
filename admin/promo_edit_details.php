<?php require_once 'scripts/config.php';
//提交form重新定向（第二回）返回本页 自己给自己包裹
//然而action里没有URL ID传来 所以不会有ID传给if(isset($_GET['id'])) 所以直接跳转页面 之下的code是死代码都未执行
//解决办法：
//1.修改问题：修改代码结构--> if(isset($_GET['id'])){...}else if(isset($_POST['submit']))else{redirect_to('admin_editmovie.php');}
//2.修改顺序：想被执行的代码放在if(isset($_GET['id']))上面 --> 才不会被迫跳转变成死代码，还要给它一个ID
//3.action="....?id=$id" 给下面form action添加ID

//先不要想具体解决办法，先把思路搞通， 选择走哪条路

$id = $_GET['id'];
//
if (isset($_GET['id'])) {
    $found_spread_set = selectEdit($id);
} else {
    redirect_to('admin_editPromo.php');
}

if (is_string($found_spread_set)) {
    $message = 'Failed to get spread info!';

}

if (isset($_POST['submit'])) {

    $cover = $_FILES['cover'];
    $title = $_POST['title'];
    $text  = $_POST['text'];

    //Validation empty检查 变量存在 值是非空 非0 返回false （其他情况返回true
    if (empty($id) || empty($cover) || empty($title) || empty($text) 
    ) {
        $message = 'Please fill the required fields0-0...';
    } else { //返回false 执行这里
        //Do the edit
        $result  = editPromo($id, $cover, $title, $text);
        $message = $result;
    }
}

if (isset($_GET['id'])) {
    $found_spread_set = selectEdit($id);
} else {
    redirect_to('admin_editPromo.php');
}

?>


<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Content</title>
</head>
<body>
	<h2>Edit Content</h2>



	<?php if (!empty($message)): ?>
		<p><?php echo $message; ?></p>
	<?php endif;?>

<!-- PDO::query() returns a PDOStatement object, or FALSE on failure. -->
	<?php while ($found_spread = $found_spread_set->fetch(PDO::FETCH_ASSOC)): ?>
		<form action="promo_edit_details.php?id=<?php echo $found_spread['spread_id']; ?>" method="post"  enctype="multipart/form-data">
        <label for="cover">Cover Image:</label>
        <input type="file" name="cover" id="cover" value="<?php echo $found_spread['spread_img']; ?>"><br><br>

        <label for="title">spread Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $found_spread['spread_title']; ?>"><br><br>


    

<!-- textarea no value 怎么显示原有的文字 -->
        <label for="story">spread Storyline:</label>
        <textarea name="text" id="story">
        <?php echo $found_spread['spread_text']; ?>
        </textarea><br><br>


        <button type="submit" name="submit">Change</button>
		</form>
	<?php endwhile;?>
</body>
</html>
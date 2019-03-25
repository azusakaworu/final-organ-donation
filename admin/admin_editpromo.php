<?php
require_once 'scripts/config.php';

confirm_logged_in();

$tbl1   = 'tbl_spread';
$spreads = getAll($tbl1);

$value           = "spread_id";
$tbl             = 'tbl_spread';
$col             = 'spread_id';
$found_spread_set = getSingle($tbl, $col, $value);

// if(is_string($found_spread_set)){
//     $message = 'Failed to get spread info!';
// }
// isset 和 ！empty 的区别

?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Content</title>
</head>
<body>
	<h2>Edit Content</h2>
    <table>
        <thead>
            <tr>
                <th>Content ID</th>
                <th>Title</th>
                <th>Select</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($spread = $spreads->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $spread['spread_id']; ?></td>
                <td><?php echo $spread['spread_title']; ?></td>
                <!-- 选择以后如何蹦到对应的ID spread form  -->
                <td><a href="promo_edit_details.php?id=<?php echo $spread['spread_id']; ?>">Select</a></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>
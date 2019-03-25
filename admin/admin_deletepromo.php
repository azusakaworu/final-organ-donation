<?php 
    require_once('scripts/config.php');
    confirm_logged_in();

    // TODO: pull all users from tbl_user
    // save the result to be an array $users
    $tbl = 'tbl_spread';
    $spreads = getAll($tbl);

    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delete User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>Delate Content</h2>
    <table>
        <thead>
            <tr>
                <th>Promo ID</th>
                <th>Title</th>
                <th>Detele</th>
            </tr>
        </thead>
        <tbody>
            <?php while($spread = $spreads->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $spread['spread_id'];?></td>
                <td><?php echo $spread['spread_title'];?></td>
                <td><a href="scripts/caller.php?caller_id=deletePromo&id=<?php echo $spread['spread_id']; ?>">Delete</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
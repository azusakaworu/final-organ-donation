<?php require_once 'admin/scripts/config.php';

$results = getAll('tbl_spread');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- responsible for all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
	<title>Organ Donation Spread</title>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.0.2/vue-router.min.js"></script>


</head>
<body>
	<main id="app">

<?php include 'templates/header.html';?>

<div class="container">
	<div class="row">

<?php while ($row = $results->fetch(PDO::FETCH_ASSOC)): ?>
<div class="col-sm-12 col-md-6">
<img class="spreadImg shadow p-3 mb-5 bg-white rounded" src="images/<?php echo $row['spread_img']; ?>"
	 alt="<?php echo $row['spread_title']; ?>">
</div>
<div class="col-sm-12 col-md-6">
	<h2 class="spredTitle"><?php echo $row['spread_title']; ?></h2>
	 <p class="spreadText"><?php echo $row['spread_text']; ?></p>
</div>

	 

<?php endwhile;?>

	</div>
</div>





<?php include 'templates/footer.html';?>


	</main>


<script type="text/javascript"  src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
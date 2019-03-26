<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- responsible for all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
	<title>Organ Donation About</title>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.0.2/vue-router.min.js"></script>


</head>
<body>
	<main id="app">

<?php include 'templates/header.html';?>

<section>
	
		<div >
				<video id="vid"  poster="images/video-cover.jpg" controls width="100%">
         <!-- <source src="video/1080.mp4" type="video/mp4"> -->
      </video>
		</div>
<div class="container">
		<div class="row">
		<div class="col-sm-12 col-md-4">
			<img src="images/text1.png" alt=""width="300px">
		</div>
		<div class="col-sm-12 col-md-4">
			<img src="images/heroman.png" alt="" width="300px">
		</div>
		<div class="col-sm-12 col-md-4">
			<img src="images/text2.png" alt=""width="400px">

    </div>

	</div>
	</div>

</section>


<section  style="background-color:#aedbf2;" >
	<div class="container">
		<div class="row">

		<div class="col-sm-12 col-md-6">
			<img src="images/all.svg" alt="" width="500px">

		</div>
			 <div class="col-sm-12 col-md-6">
				 <h5>WHY BECOME A ORGAN </h5>
				 <p>22 people die every day while waiting for a transplant.
            1 organ donor can save 8 lives and change the lives of more then 50 people.
            Almost anyone can be organ donor, ragardless of age or medical history.
            Donors are needed  for all races and ethinc groups.
            Transplant success rates increase when organs are matched between members of the same ethinc background.</p>

			 </div>
		</div>
	</div>
</section>



<!-- round icons -->
<section>
	<div class="container">
		<div class="text-center">
			<h5>HOW TO BECOME A ORAGN DONOR</h5>
		</div>
		<div class="row">
    <div class="col-sm-12 col-md-4 text-center" v-for="item in items">
				<img :src="'images/' + item.img" alt="" width="250px">
				
				<p>{{item.text}}</p>
		</div>
		</div>
		

	</div>
</section>







<?php include 'templates/footer.html';?>


	</main>


<script type="text/javascript"  src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
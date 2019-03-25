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
	<title>Organ Donation Home</title>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.0.2/vue-router.min.js"></script>


</head>
<body>
	<main id="app">

<!-- hearder nav -->

<?php include 'templates/header.html';?>
<section>
  <div class="container">
  <h4 class="text-center">All About Organ Donation</h4>
  <h5 class="text-center">Have a question about Organ Donation? You've come to the right place!</h5>
  <p>is a non-profit organ donor registration campaign affiliated with Trillium Gift of Life Network. Our campaign strives to educate the public on the importance of organ donation and becoming an organ donor. Our campaign strives to educate the public on the importance of organ donation and becoming a donor. We encourage you to communicate to your relatives about your decision as they are able to veto your choice even if you are registered. Sometimes there are things we need to talk about with the people we care most for. Through word of mouth and social media we can spread the message and save lives together.</p>
  </div>
</section>



<section  style="background-color:#aedbf2;">
  <h4 class="text-center">Did you know that...</h4>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h5>1 Donor Can Save Up To 8 Lives</h5>
        <img src="images/pie.png" alt="">
        <p>And Can Enhance the lives of up to 75 more through the gift of tissue.</p>
        <p>31% of Ontarians are registered donors. That’s 3.7 million out of an eligible 12.1 million.</p>
      </div>
      <div class="col-sm-12 col-md-6">
        <img src="images/people.png" alt="">
        <img src="images/hero.png" alt="">
      </div>
    </div>

  </div>

</section>




<!-- group  -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h5 class="text-center">What organs and tissue can I donate?</h5>
      </div>


      <div class="col-12 text-center">
        <p>Organs and tissue that can be donated include the heart, kidneys, liver, lungs, pancreas, small intestines, eyes, bone, skin, and heart valves. Below you can click on the diagram and learn about all the organs.</p>
        <img src="images/group.png" width="400px" >

      </div>
    </div>

  </div>

</section>


<!-- video -->
<section  >
  <div class="container">
    <div class="text-center">
      <h5>Spread the word to save more lives.</h5>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-6">
      <video width="500px" controls poster="images/video-cover1.png">
         <source src="video/video2.mp4" type="video/mp4">
         
      </video>
      </div>

      <div class="col-sm-12 col-md-6" >
      <video width="500px" controls poster="images/video-cover2.png">
         <source src="video/video3.mp4" type="video/mp4">
         
      </video>
      </div>


      <div class="col-12">
        <p>Once you’ve registered your consent to donate, come back and encourage your friends and family members to do the same.</p>
      </div>

    </div>


  </div>
</section>




<!-- footer -->

<?php include 'templates/footer.html';?>



</main>


<script type="text/javascript"  src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
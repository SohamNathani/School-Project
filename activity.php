<!DOCTYPE html>
<html>
<head>
	<title>Activity</title>
	<link rel="stylesheet" type="text/css" href="assets/css/activity.css">
	<link rel="stylesheet" type="text/css" href="assets/css/nav-bar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
			<?php include "Includes/nav-bar.php" ?>
</header>
	<div class="container-activity">
		<div class="carousel">

		
			 <!-- Full-width images with number and caption text -->
			  <div class="mySlides fade">
			    <div class="numbertext">1 / 3</div>
			    <img src="http://hdqwalls.com/wallpapers/convict-lake-autumn-4k-2k.jpg" style="width:100%">
			    <div class="text">Caption Text</div>
			  </div>

			  <div class="mySlides fade">
			    <div class="numbertext">2 / 3</div>
			    <img src="assets/Images/random2.jpg" style="width:100%">
			    <div class="text">Caption Two</div>
			  </div>

			  <div class="mySlides fade">
			    <div class="numbertext">3 / 3</div>
			    <img src="assets/Images/random2.jpg" style="width:100%">
			    <div class="text">Caption Three</div>
			  </div>

			  <!-- Next and previous buttons -->
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
		  	<span class="dot" onclick="currentSlide(1)"></span> 
		  	<span class="dot" onclick="currentSlide(2)"></span> 
		  	<span class="dot" onclick="currentSlide(3)"></span> 
			</div>

		<h1>Heading</h1>
		<div class="form">
			<form action="Includes/pic_upload-inc.php" method="post" enctype="multipart/form-data">
				<label for="pic_file1">Upload the picture</label><br>
				<input type="file" name="pic_file" id="pic_file1" class="admin-form"><br><br>
				<label for="description1">Enter the description</label><br>
				<input type="text" placeholder="Enter the description" class="admin-form" name="description" id="description1">
				<input type="submit" value="upload" name="submit" class="form-button">
			</form>
		</div>
		<div class="material" id="pages">
			
		<?php
			include "Includes/dbc_inc.php";

			$stmt = mysqli_stmt_init($conn);
			$sql = "SELECT * FROM activity_pics ORDER BY pic_id DESC";
			mysqli_stmt_prepare($stmt, $sql);

			mysqli_stmt_execute($stmt);

			$result = mysqli_stmt_get_result($stmt);

			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div class="cards"><img src="assets/Images/activity/'.$row["pic_name"].'"><p class="vertical">'.$row["pic_description"].'</p><button>Delete</button></div>';
			}

			
		 ?>	
			

		</div>
	</div>
	<script type="text/javascript">
		var slideIndex = 1;
			showSlides(slideIndex);

// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1} 
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none"; 
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block"; 
		  dots[slideIndex-1].className += " active";
		}
		


	</script>
	<script type="text/javascript" src="../assets/js/page.js"></script>
</body>
</html>
<!-- #406e9d opaci
opacity 36</span>.%
 -->
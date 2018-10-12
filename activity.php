<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Activity</title>
	<link rel="stylesheet" type="text/css" href="assets/css/nav-bar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/activity.css">
	<link rel="stylesheet" href="assets/css/s-g.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id= "activity-container">
    <header>
			<?php include "Includes/nav-bar.php" ?>
	</header>
	<div class="container-activity">
	
	<?php 
		if (isset($_SESSION["u_login"])) {
			echo '<div class="form">
			<form action="Includes/c_upload_inc.php" method="post" enctype="multipart/form-data">
				<label for="c_file1">Upload pictures</label><br>
				<input type="file" name="c_file[]" id="c_file1" class="admin-form" multiple><br><br>
				<label for="c_description1">Enter the description</label><br>
				<input type="text" placeholder="Enter the description" class="admin-form" name="c_description" id="c_description1">
				<input type="submit" value="upload" name="submit_c" class="form-button">
			</form>
		</div>';
		}
	?>
		
		
			<?php
				include_once "Includes/dbc_inc.php";

				echo '<div class="carousel">';

				$stmt = mysqli_stmt_init($conn);
				$sql = "SELECT * FROM activity_c ORDER BY c_id ASC";
				mysqli_stmt_prepare($stmt,$sql);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				$row_number = mysqli_num_rows($result);

				while ($row = mysqli_fetch_assoc($result)) {
					echo '<div class="mySlides fade">
								<div class="numbertext">'.$row["c_id"].' / '.$row_number.'</div>
									<img src="assets/Images/activity/'.$row["c_name"].'" style="width:100%">
								<div class="text">'.$row["c_description"]. '<br>';
								if (isset($_SESSION["u_login"])) {
									echo '<a href="Includes/delete_c_inc.php?delc" class="form-a-delete">Reset</a>';
								}
								echo '</div></div>';
				}
				echo '<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a><br>';

				$stmt = mysqli_stmt_init($conn);
				$sql = "SELECT * FROM activity_c ORDER BY c_id ASC";
				mysqli_stmt_prepare($stmt, $sql);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				echo '<div style="text-align:center">';	

			  while ($row = mysqli_fetch_assoc($result)) {
				  echo '<span class="dot" onclick="currentSlide('.$row["c_id"].')"></span>';
			  }
			  echo '</div>';
			?>

		<h1 class="main-heading-b">Images</h1>
		<div class="main-heading-bot"></div>
		<?php
			if (isset($_SESSION["u_login"])) {
				echo '<div class="form">
			<form action="Includes/pic_upload-inc.php" method="post" enctype="multipart/form-data">
				<label for="pic_file1">Upload the picture</label><br>
				<input type="file" name="pic_file" id="pic_file1" class="admin-form"><br><br>
				<label for="description1">Enter the description</label><br>
				<input type="text" placeholder="Enter the description" class="admin-form" name="description" id="description1">
				<input type="submit" value="upload" name="submit" class="form-button">
			</form>';
			}
		?>
		
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
				echo '<div class="cards"><div class="card-img"><img src="assets/Images/activity/'.$row["pic_name"].'"></div><div class="vertical"><p>'.$row["pic_description"]. '</p></div>';
				if (isset($_SESSION["u_login"])) {
					echo '<div class="link-block"><a href="Includes/delete_inc.php?delid=' . $row["pic_id"] . '&delname=' . $row["pic_name"] . '" class="form-a-delete">Delete</a></div>';
				}
				echo '</div>';
			}
			echo '</div>';

			
		 ?>	
			

		</div>
	</div>
</div>
	<footer>
        <!--Footer of the page -->
        <?php include_once "Includes/footer.php" ?>
    </footer>
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
		      dots[i].className = dots[i].className.replace(" dot-active", "");
		  }
		  slides[slideIndex-1].style.display = "block"; 
		  dots[slideIndex-1].className += " dot-active";
		}
		


	</script>
	<script type="text/javascript" src="../assets/js/page.js"></script>
</body>
</html>
<!-- #406e9d opaci
opacity 36</span>.%
 -->
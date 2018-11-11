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
			<?php include "Includes/nav-bar.php" ?>
	<div class="container-activity"  style="margin-top:80px;">
	
	<?php 
		if (isset($_SESSION["u_login"])) {
			echo '<div class="form">
			<form action="Includes/c_upload_inc.php" method="post" enctype="multipart/form-data">
				<label for="c_file1">Upload pictures</label><br>
				<input type="file" name="c_file[]" id="c_file1" class="admin-form" multiple><br>
				<input type="submit" value="upload" name="submit_c" class="form-button">
			</form>
			</br><a href="Includes/delete_c_inc.php?delc" class="form-a-delete">Reset</a>
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
									<img src="assets/Images/activity/'.$row["c_name"].'" style="width:100%"></br></div>';
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
			  echo '</div></div></div>';
			?>

		<h1 class="main-heading-w">Images</h1>
		<div class="main-heading-bot"></div>
		<?php
			if (isset($_SESSION["u_login"])) {
				echo '<div class="form">
			<form action="Includes/pic_upload-inc.php" method="post" enctype="multipart/form-data">
				<label for="pic_file1">Upload the picture</label><br>
				<input type="file" name="pic_file" id="pic_file1" class="admin-form"><br>
				<input type="submit" value="upload" name="submit" class="form-button">
			</form></div>';
			}
		?>
		
		<div class="page-container">
			<div class="page-button">
			<?php
				include 'Includes/Pagination-inc.php';

				$page_no = $_SESSION['page_no'];
				$start_point = $_SESSION['start_point'];
				$total_number_of_pages = $_SESSION['total_no_of_pages'];
				$number_of_row_per_page = $_SESSION['number_of_row_per_page'];

				if ($page_no == $total_number_of_pages) {
					echo '<a href="Includes/Pagination-inc.php?page='.$page_no.'&page2" class="pagination-button page_disable">NEXT</a>';
					if ($page_no == 1) {
						echo '<a href="Includes/Pagination-inc.php?page='.$page_no.'&page2" class="pagination-button page_disable">PREV</a>';
					} else {
						echo '<a href="Includes/Pagination-inc.php?page='.--$page_no.'&page2" class="pagination-button">PREV</a>';
					}
				} else {
					echo '<a href="Includes/Pagination-inc.php?page='.++$page_no.'&page2" class="pagination-button">NEXT</a>';
					// Normalized the value again before using it for prev button
					--$page_no;
					if ($page_no == 1) {
						echo '<a href="Includes/Pagination-inc.php?page='.$page_no.'&page2" class="pagination-button page_disable">PREV</a>';
					} else {
						echo '<a href="Includes/Pagination-inc.php?page='.--$page_no.'&page2" class="pagination-button">PREV</a>';
					}
				}
			?>
			<!-- <a href="Includes/Pagination-inc.php?page_nxt" class="pagination-button page_disable">NEXT</a><a href="Includes/Pagination-inc.php?page_prv" class="pagination-button">PREV</a> -->
		</div>
		</div>	
		<div class="material" id="pages">
			
			
		<?php
			include "Includes/dbc_inc.php";

			

			$page_no = $_SESSION['page_no'];
			$start_point = $_SESSION['start_point'];
			$total_number_of_pages = $_SESSION['total_no_of_pages'];
			$number_of_row_per_page = $_SESSION['number_of_row_per_page'];

			$stmt = mysqli_stmt_init($conn);
			$sql = "SELECT * FROM activity_pics ORDER BY pic_id DESC LIMIT ?,?";
			mysqli_stmt_prepare($stmt, $sql);

			mysqli_stmt_bind_param($stmt, "ii", $start_point, $number_of_row_per_page);

			mysqli_stmt_execute($stmt);

			$result = mysqli_stmt_get_result($stmt);

			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div class="cards"><div class="card-img"><img src="assets/Images/activity/'.$row["pic_name"].'"></div>';
				if (isset($_SESSION["u_login"])) {
					echo '<div class="link-block"><a href="Includes/delete_inc.php?delid=' . $row["pic_id"] . '&delname=' . $row["pic_name"] . '" class="form-a-delete">Delete</a></div>';
				}
				echo '</div>';
			}
			echo '</div>';

			
		 ?>		
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
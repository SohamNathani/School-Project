<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
	    crossorigin="anonymous">
</head>

<body>
	<!-- main content of the login-box -->
	<main>
		<form method="POST" action="Includes/login_inc.php">
			<!-- Login-box started from here -->
			<h2>LOGIN</h2>
			<label class="t_margin_b"for="Username">Username</label>
			<input class="Single_Line" id="Username" type="text" name="Username" required>
			<label id="passwd" class="t_margin_b"	for="Password">Password</label>
			<div class="OneLine Single_Line"><input class="Single_Line2" id="Password" type="password" name="Password" required><div id="Text_to_Pass"><i class="far fa-eye" onclick="myFunction()"></i></div>
			</div>
			<input id="Submit_B" type="submit" name="Login" value="Submit">
			<!-- login-box ended here -->
		</form>
	</main>
	<script type="text/javascript" src="assets/js/login.js"></script>
	<script>
	function myFunction() {
    var x = document.getElementById("Password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
   
</script>
</body>

</html>
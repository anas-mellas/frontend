<?php
include("registertrait.php");

	
?>

<!DOCTYPE html>

<html>

<head>

	<title>Register</title>

	<link rel="stylesheet" type="text/css" href="static/css/sign-up.css">

	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

</head>

<body>

	<div class="container">

		<div class="contact-box">

			<div class="left"></div>

			<div class="right">

				<h2>Demande</h2>

			<form method="POST" action="#">

				<input type="text" name="firstName" class="field" placeholder="First Name">

				<input type="text" name="lastName" class="field" placeholder="Last Name" >

				<input type="text" name="mobile" class="field" placeholder="Mobile">

				<input type="text" name="city" class="field" placeholder="City" >

				<textarea  name="adresse" class="field" >Adresse</textarea>

				<input type="email" name="email" class="field" placeholder="Email" >

				<input type="password" name="pass" class="field" placeholder="Mot de passe" >

				<input type="submit" name="submit" class="btn btn-danger">
				<?php if(!empty($message)) : ?>

                  <p><?php echo $message; ?></p>



                  <?php  endif; ?>

			</form>

			</div>

		</div>

	</div>

	<!--Traitement d ajoute-->



</body>

</html>
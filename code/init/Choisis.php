<?php
include ("verif.php");

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Menu Principale</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="limiter">
	<div class="container-login100">
	<div class="wrap-login100">
	<div class="table-center">

<?php

	echo '
		<form class="login100-form validate-form">
				<span class="login100-form-title">
				Bienvenue ' .htmlspecialchars($_SESSION['prenom']). '
				</span>';
?>

				<span class="login100-form-title">
						Merci de faire votre choix
				</span>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" formaction="partage.php" >
						Partager un cours
					</button>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" formaction="suivre.php">
						Choisir un cours à suivre
					</button>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" formaction="profil.php">
						Voir profil
					</button>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" formaction="chat.php">
						Chat IMT
					</button>
				</div>


				<div class="container-login100-form-btn">
					<button class="login100-form-btn" formaction="deconnexion.php">
						Déconnexion
					</button>
				</div>
		</form>
	</div>
	</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

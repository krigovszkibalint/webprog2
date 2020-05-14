<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>
<?php require_once USER_MANAGER; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WebProg2 - Beadandó</title> 
	<!-- Bootstrap CSS --> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> 
	 
	<!-- Fonts --> 
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 
 
	<!-- Saját CSS --> 
	<link rel="stylesheet" type="text/css" href="<?=PUBLIC_DIR.'style.css?'.date('YmdHis', filemtime(PUBLIC_DIR.'style.css'))?>"> 
</head> 
<body> 
	<div class="container-fluid"> 
		<!-- <header><?php include_once PROTECTED_DIR.'header.php'; ?></header> --> 
		<!-- <nav><?php require_once PROTECTED_DIR.'nav.php'; ?></nav> --> 
		 
		<!--<content>--> <?php require_once PROTECTED_DIR.'routing.php'; ?> <!--</content>--> 
 
		<!-- <footer><?php include_once PROTECTED_DIR.'footer.php'; ?></footer>  -->
	</div> 
</body> 
</html>
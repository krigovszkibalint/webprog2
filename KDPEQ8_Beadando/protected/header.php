	<div id="header-elements">
		<div id="header-elements-left">
			<a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
		</div>
	</div>
<?php if(!IsUserLoggedIn()) : ?>
	<div id="header-elements">
		<div id="header-elements-right">
			<a href="index.php?P=login">Bejelentkezés</a>
		</div>
		<div id="header-elements-right">
			<a href="index.php?P=register">Regisztráció</a>
		</div>
	</div>
<?php else : ?>

<div id="header-elements">
	<div id="header-elements-right">
	<a href="index.php?P=logout">Kijelentkezés</a>
	</div>
</div>
	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 1) : ?>
		<div id="header-elements">
			<div id="header-elements-right">
				<a href="index.php?P=profile">Profil</a>
			</div>
			<div id="header-elements-right">
				<a href="index.php?P=list_worker">Felfedezés</a>
			</div>
		</div>
	<?php else : ?>
	<?php endif; ?>
<?php endif; ?>
<?php
if ($_GET['P'] = 'profile') echo "<body class='profile'>";
else echo "<body>"; ?>
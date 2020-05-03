		<div id="footer-elements">
			<div id="footer-elements-left">
				<a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
			</div>
		</div>
	<?php if(!IsUserLoggedIn()) : ?>
		<div id="footer-elements">
			<div id="footer-elements-right">
				<a href="index.php?P=login">Bejelentkezés</a>
			</div>
			<div id="footer-elements-right">
				<a href="index.php?P=register">Regisztráció</a>
			</div>
		</div>
	<?php else : ?>

	<div id="footer-elements">
		<div id="footer-elements-right">
		<a href="index.php?P=logout">Kijelentkezés</a>
		</div>
	</div>
		<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 1) : ?>
			<div id="footer-elements">
				<div id="footer-elements-right">
					<a href="?P=profile">Profil</a>
				</div>
				<div id="footer-elements-right">
					<a href="index.php?P=list_worker">Felfedezés</a>
				</div>
			</div>
		<?php else : ?>
		<?php endif; ?>
	<?php endif; ?>
	
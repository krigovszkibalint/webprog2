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
		<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] == 1) : ?> 
			<div id="footer-elements"> 
				<div id="footer-elements-right"> 
					<a href="index?P=profile">Profil</a> 
				</div> 
				<div id="footer-elements-right"> 
					<a href="index.php?P=list_worker">Felfedezés</a> 
				</div>
			</div>
		<?php endif; ?>
		<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] == 2) : ?>
			<div id="footer-elements"> 
				<div id="footer-elements-right"> 
					<a href="index?P=profile">Admin felület</a> 
				</div> 
			</div>
		<?php endif; ?>
	<?php endif; ?>
	
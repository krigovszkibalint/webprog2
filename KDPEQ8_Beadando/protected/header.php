<header> 
	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] == 1) : ?>
	<div id="header-elements"> 
		<div id="header-elements-left"> 
			<a href="index.php"><span class="glyphicon glyphicon-home"></span></a> 
		</div> 
		<div id="header-elements-left"> 
			<a href="index.php?P=settings"><span class="glyphicon glyphicon-cog"></span></a> 
		</div>
		<div id="header-elements-left"> 
			<a href="index.php?P=new_post"><span class="glyphicon glyphicon-plus"></span></a> 
		</div> 
	</div> 
	<?php endif; ?>
	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] == 2) : ?>
	<div id="header-elements"> 
		<div id="header-elements-left"> 
			<a href="index.php"><span class="glyphicon glyphicon-home"></span></a> 
		</div> 
		<div id="header-elements-left"> 
			<a href="index.php?P=settings"><span class="glyphicon glyphicon-cog"></span></a> 
		</div>
	</div> 
	<?php endif; ?>
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
	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] == 1) : ?>
		<div id="header-elements">
			<div id="header-elements-right">
				<a href="index.php?P=profile">Profil</a>
			</div>
			<div id="header-elements-right">
				<a href="index.php?P=explore">Felfedezés</a>
			</div>
		</div>
	<?php endif; ?>
	<?php if (isset($_SESSION['permission']) && $_SESSION['permission'] == 2) : ?>
		<div id="header-elements">
			<div id="header-elements-right">
				<a href="index.php?P=profile">Admin felület</a>
			</div>
			<div id="header-elements-right">
				<a href="index.php?P=explore">Bejegyzések</a>
			</div>
			<div id="header-elements-right">
				<a href="index.php?P=user_list">Felhasználók</a>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>
</header>
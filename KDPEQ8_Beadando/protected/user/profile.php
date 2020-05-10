<?php
	$query = "SELECT id, username, email, bio FROM users WHERE id = ".$_SESSION['uid']; 

	require_once DATABASE_CONTROLLER; 
	$user = getRecord($query); 
?>

<div class="profile-cover" style="background-image: url(<?=PUBLIC_DIR."img/default-cover.png"?>)"> 
	<div class="profile-cover-content"> 
		<div class="grid-container"> 
		  <div class="profile-cover-user-container"> 
		    <div class="profile-cover-user"> 
		    	<h2><?=$user['username']?></h2> 
		    </div> 
		    <div class="profile-cover-userbio"> 
		    	<p> 
			    	<justify> 
			    	<?=$user['bio']?>
			    	</justify>
		    	</p> 
		    </div> 
		  </div> 
		  <div class="profile-cover-content-img"> 
		  	<img src="<?= PUBLIC_DIR."img/default-profile.png" ?>"> 
		  </div> 
		</div> 
	</div> 
</div>
<div class="profile-content">
	<div class="profile-content-title">
	<h2>Bejegyzések</h2>
	</div>
	<section id="photos">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
	</section>
</div>
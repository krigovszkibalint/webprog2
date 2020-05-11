<?php
	$query = "SELECT id, username, email, profile, cover, bio FROM users WHERE id = ".$_SESSION['uid']; 
	require_once DATABASE_CONTROLLER; 
	$user = getRecord($query); 
	if (empty($user['profile'])) {
		$user['profile'] = "default-profile.png";
	}
	if (empty($user['cover'])) {
		$user['cover'] = "default-cover.png";
	}
?>
<?php
$query = "SELECT id, image, title, description, uploaded_by FROM posts WHERE uploaded_by = ".$_SESSION['uid'];
require_once DATABASE_CONTROLLER; 
$user_posts = getList($query);
?>
<div class="profile-cover" style="background-image: url(<?=PUBLIC_DIR."img/".$user['cover'] ?>)"> 
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
		  	<img src="<?= PUBLIC_DIR."img/".$user['profile'] ?>"> 
		  </div> 
		</div> 
	</div> 
</div>
<div class="profile-content">
	<div class="profile-content-title">
	<h2>Bejegyzések</h2>
	</div>
	<section id="photos">
				<?php foreach ($user_posts as $up) : ?>
					<img src="<?= PUBLIC_DIR."posts/".$up['image'] ?>">
				<?php endforeach;?>
<!-- 		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>">
		<img src="<?= PUBLIC_DIR."img/image-1.jpg" ?>"> -->
	</section>
</div>

<div class="profile-cover"> 
	<div class="profile-cover-content"> 
		<div class="grid-container"> 
		  <div class="profile-cover-user-container"> 
		    <div class="profile-cover-user"> 
		    	<h2><?=$_SESSION['uname']?></h2> 
		    </div> 
		    <div class="profile-cover-userbio"> 
		    	<p> 
			    	<justify> 
			    	<?=$_SESSION['bio']?>
			    	</justify> 
		    	</p> 
		    </div> 
		  </div> 
		  <div class="profile-cover-content-img"> 
		  	<img src="<?= PUBLIC_DIR."img/profile-img.png" ?>"> 
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
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
<?php
$query = "SELECT id, image, title, description, upload_date, uploaded_by FROM posts WHERE uploaded_by = ".$_SESSION['uid']." ORDER BY upload_date DESC";
require_once DATABASE_CONTROLLER; 
$user_posts = getList($query);
?>
<?php
$query = "SELECT COUNT(`image`) FROM posts WHERE uploaded_by = ".$_SESSION['uid'];
require_once DATABASE_CONTROLLER; 
$posts_number = getField($query);
?>
<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] == 1) : ?>
<div class="profile-content">
	<div class="profile-content-title">
	
	<h2>Bejegyzések</h2>
	
	</div>
	<div class="photos">
	<?php $i=0;?>
		<?php foreach ($user_posts as $up) : ?>
			<?php $i++; ?>
			<div id="post-image">
				<img id="<?="myImg".$i ?>" src="<?= PUBLIC_DIR."posts/".$up['image'] ?>" alt="<?=$up['description']?>"
					 title="<?=$up['title']?>" name="<?=$up['upload_date']?>">
			</div>

			<div id="myModal" class="modal">
				<div class="modal-container">	
					<div class="modal-header">
						<div class="modal-header-content">
							<b><?=$user['username']?></b>
							<span class="close">&times;</span>
						</div>
					</div>
					<img class="modal-content" id="img">
					<div class="modal-footer">
						<div class="modal-footer-content">
							<b><div id="title"></div></b>
							<?php if ($_SESSION['uid'] == $up['uploaded_by']) : ?>
								<div class="delete"><span class="glyphicon glyphicon-trash"></span></div>
							<?php endif;?>
						</div>
						<div id="caption"></div>
						<div id="upload-date"></div>
					</div>
				</div>
			</div>
			<script>
				var posts_number = <?php echo $posts_number; ?>;
				for (var i = 1; i <= posts_number; i++) {
					var index = <?php echo($i); ?>;
					var img = document.getElementById("myImg"+index);
				}
				var modal = document.getElementById("myModal");
				var modalImg = document.getElementById("img");
				var titleText = document.getElementById("title");
				var captionText = document.getElementById("caption");
				var dateText = document.getElementById("upload-date");
				img.onclick = function(){
					modal.style.display = "block";
					modalImg.src = this.src;
					captionText.innerHTML = this.alt;
					titleText.innerHTML = this.title;
					dateText.innerHTML = this.name;
				}
				var span = document.getElementsByClassName("close")[0];
				span.onclick = function() { 
					modal.style.display = "none";
				}
			</script>
		<?php endforeach;?>

	</div>
</div>
<?php endif; ?>
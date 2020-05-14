<?php
	$query = "SELECT id, username, email, profile, cover, bio FROM users WHERE id = ".$_SESSION['uid']; 
	require_once DATABASE_CONTROLLER; 
	$user = getRecord($query); 
?>
<?php
	$query = "SELECT id, image, title, description, upload_date, uploaded_by FROM posts ORDER BY upload_date DESC";
	require_once DATABASE_CONTROLLER; 
	$user_posts = getList($query);
?>
<?php
	$query = "SELECT COUNT(`image`) FROM posts";
	require_once DATABASE_CONTROLLER; 
	$posts_number = getField($query);
?>
<div class="explore-content">
	<div class="explore-content-title">
		<h2>Legújabb bejegyzések</h2>
	</div>
	<div class="explore-photos">
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
							<!-- a jelenleg bejelentkezett felhasználót írja ki, mert nem tudtam rájönni, hogyan írja ki azt aki feltöltötte a képet -->
							<b><?=$user['username']?></b>
							<span class="close">&times;</span>
						</div>
					</div>
					<img class="modal-content" id="img">
					<div class="modal-footer">
						<div class="modal-footer-content">
							<b><div id="title"></div></b>
							<?php if ($_SESSION['uid'] == $up['uploaded_by'] || $_SESSION['permission'] == 2) : ?>
								<!-- <a href="<?= PROTECTED_DIR."user/delete.php"?>"> -->
									<div class="delete"><span class="glyphicon glyphicon-trash"></span></div>
								<!-- </a> -->
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
		<?php endforeach; ?>
	</div>
</div>
<?php 
	$query = "SELECT id, username, email, profile, permission FROM users";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
?>
<div class="admin-title-container">
<div class="admin-content-title">
	<h2>Felhasználók</h2>
</div>
</div>
<div class="admin-content">

	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Profilkép</th>
				<th scope="col">Felhasználónév</th>
				<th scope="col">E-mail</th>
				<th scope="col">Jogosultság</th>
			</tr>
	</thead>
	<tbody>
		<?php $i = 0; ?>
		<?php foreach ($users as $u) : ?>
			<?php $i++; ?>
				<?php
					if (empty($u['profile'])) {
					$u['profile'] = "default-profile.png";
					}
					if ($u['permission'] == 2) { $u['permission'] = "Admin"; }
					else if ($u['permission'] == 1) { $u['permission'] = "Felhasználó"; }
					else if ($u['permission'] == 0) { $u['permission'] = "Nincs"; }
				?>
				<tr>
					<th scope="row"><?=$i ?></th>
					<td><img src="<?= PUBLIC_DIR."img/".$u['profile'] ?>" height="50px" width="50px"></td>
					<td><!-- <a href="?P=profile&u=<?=$w['id'] ?>"> --><?=$u['username'] ?></a></td>
					<td><?=$u['email'] ?></td>
					<td><?=$u['permission'] ?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
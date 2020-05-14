<?php 
	$query = "SELECT id, username, email, profile, permission FROM users";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['asc'])) {
	$query = "SELECT id, username, email, profile, permission FROM users ORDER BY username ASC";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
}
elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['desc'])) {
	$query = "SELECT id, username, email, profile, permission FROM users ORDER BY username DESC";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
}
elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email-asc'])) {
	$query = "SELECT id, username, email, profile, permission FROM users ORDER BY email ASC";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
}
elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email-desc'])) {
	$query = "SELECT id, username, email, profile, permission FROM users ORDER BY email DESC";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
}
elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['perm'])) {
	$query = "SELECT id, username, email, profile, permission FROM users ORDER BY permission DESC";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
}
?>

<div class="admin-title-container">
<div class="admin-content-title">
	<h2>Felhasználók</h2>
</div>
</div>
<div class="admin-content">
	<div class="filter">
	<center>
	  <form method="post">
		<button type="submit" class="filter-btn" name="asc">Felhasználónév <span class="glyphicon glyphicon-sort-by-alphabet"></span></button>

		<button type="submit" class="filter-btn" name="desc">Felhasználónév <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span></button>

		<button type="submit" class="filter-btn" name="email-asc">E-mail <span class="glyphicon glyphicon-sort-by-alphabet"></span></button>

		<button type="submit" class="filter-btn" name="email-desc">E-mail <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span></button>

		<button type="submit" class="filter-btn" name="perm">Jogosultság szerint</button>
	  </form>
	</center>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Profilkép</th>
				<th scope="col">Felhasználónév</th>
				<th scope="col">E-mail</th>
				<th scope="col">Jogosultság</th>
				<th scope="col">Törlés</th>
			</tr>
	</thead>
	<tbody>
		<?php $i = 0; ?>
		<?php foreach ($users as $u) : ?>
		<?php $i++; ?>
			<?php
				if (empty($u['profile'])) { $u['profile'] = "default-profile.png"; }
				if ($u['permission'] == 2) { $u['permission'] = "Admin"; }
				else if ($u['permission'] == 1) { $u['permission'] = "Felhasználó"; }
				else if ($u['permission'] == 0) { $u['permission'] = "Nincs"; }
			?>
			<tr>
				<th scope="row"><?=$i ?></th>
				<td><img src="<?= PUBLIC_DIR."img/".$u['profile'] ?>" height="50px" width="50px"></td>
				<td><a href="?P=profile&u=<?=$u['id'] ?>"><b><?=$u['username'] ?></b></a></td>
				<td><?=$u['email'] ?></td>
				<td><?=$u['permission'] ?></td>
				<td><a href="index.php?P=delete_user&id=<?=$u['id']?>"><b>Törlés</b></a></td>
			</tr>
		<?php endforeach;?>
	</tbody>
	</table>
</div>
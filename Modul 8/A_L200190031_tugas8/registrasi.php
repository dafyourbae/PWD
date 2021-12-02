<?php
require 'functions.php';

if (isset($_POST['register'])) {

	if (registrasi($_POST) > 0) {
		echo "<script>
		alert('user berhasil ditambahkan');
		</script>";
	}else {
		echo mysqli_error($conn);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Registrasi</title>
</head>
<body>
	<h1>Registrasi</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username">
			</li>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">Konfirmasi Password :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="register">Registrasi</button>
			</li>
		</ul>
	</form>

</body>
</html>
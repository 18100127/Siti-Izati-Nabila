<!DOCTYPE html>
<html>
<head>
	<title>Belajar HTML</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="header">
 		<img src="logo.png" width="250">
 	</div>
 	<div class="menu">
 		<ul>
 			<li>Halaman Depan</li>
 			<li>Informasi</li>
 			<li>Kontak</li>
 			<a href="Daftar.php"><li>Daftar</li></a>
 			<a href="Login.php"><li>Login</li></a>
 		</ul>
	</div>
	<form action="">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="Password"></td>
			</tr>
		</table>
		<input type="submit" value="Masuk">
		<td>
			<button>
				<a href="index.php">Back</a>
			</button>
		</td>
	</form>
</body>
</html>
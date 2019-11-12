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
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="TTL"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="JK">
						<option value="L">Laki-Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="file" name="Photo"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<textarea name="Alamat" id="" cols="30" rows="3"></textarea>
				</td>
			</tr>
			<tr>
				<td>No HP</td>
				<td><input type="text" name="No HP"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<input type="radio" name="Status" value="Sudah Menikah">Sudah Menikah
					<input type="radio" name="Status" value="Belum Menikah">Belum Menikah
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="Password"></td>
			</tr>
			<tr>
				<td>Konfirmasi Password</td>
				<td><input type="password" name="Konfirmasi Password"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Daftar"></td>
				<td><button>
					<a href="index.php">Back</a>
				</button></td>
			</tr>
		</table>
	</form>
</body>
</html>
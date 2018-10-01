<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<form action="prosesregis.php" method="POST">
            <!-- NIM   : <input type="text" name="nim" pattern="\d*" maxlength="10" required><br><br> -->
            NIM : <input type="number" name="nim" required><br><br>
            <!-- Nama  : <input type="text" name="nama" maxlength="25" required><br><br> -->
            Nama  : <input type="text" name="nama" required><br><br>
            Email : <input type="email" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com" required><br><br>
            <input type="submit" name="submit" value="Tambah">
        </form>
</body>
</html>

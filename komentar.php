<!DOCTYPE html>
<html>
<head>
    <title>Komentar</title>
</head>
<body>
    <form method="post">
        Nama : <input type="text" name="nama"><br><br>
        Komentar : <br><textarea name="komentar" cols="30" rows="5"></textarea><br>
        <input type="submit" value="Input">
    </form>
</body>
</html>
<?php
//untuk yg komentar kalian bebas mau menggunakan 2 file atau satu file php
  if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $komentar = $_POST['komentar'];

        $count = strlen($komentar);
        if ($count < 5) {
            ?>
            <script>
                alert("Komentar harus lebih dari 5..");
            </script>
            <?php
        } else {
            echo "Jumlah Kalimat Komentar : ".$count;
        }
    }
?>

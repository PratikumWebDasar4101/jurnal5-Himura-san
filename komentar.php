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
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $komentar = $_POST['komentar'];

        $data = explode(" ", $komentar);
        $count = count($data);
        if ($count < 5) {
            ?>
            <script>
                alert("Komentar harus lebih dari 5..");
            </script>
            <?php
        } else {
            echo "Jumlah Kata Komentar : ".$count;
        }
    }
?>

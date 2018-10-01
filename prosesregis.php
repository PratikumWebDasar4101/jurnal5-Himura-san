<?php
  if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        $count_nim = strlen($nim);
        $count_nama = strlen($nama);

        if ($count_nim > 10) {
            ?>
            <script>
                alert("NIM harus kurang dari 10..");
                location = "registrasi.php";
            </script>
            <?php
        } elseif ($count_nama > 25) {
            ?>
            <script>
                alert("Nama harus kurang dari 25..");
                location = "registrasi.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("NIM : <?php echo $nim;?> \nNama : <?php echo $nama;?> \nEmail : <?php echo $email;?>");
                location = "registrasi.php";
            </script>
            <?php
        }
    }
?>

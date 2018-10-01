<?php
    session_start();
    @$data = $_SESSION['data'];

    if(isset($_GET['destroy'])){
        session_destroy();
        header("Location: registrasi.php");
    }

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
            $baris = count($_SESSION['data']);
            $newArray = array(
                "NIM"   => $nim,
                "Nama"  => $nama,
                "Email" => $email
            );
            $_SESSION['data'][$baris] = $newArray;
            ?>
            <script>
                alert("Data berhasil tersimpan..");
                location = "prosesregis.php";
            </script>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
        <a href="registrasi.php">Kembali</a>
        <table width="50%" border="1" align="center" style="text-align: center;">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
            <?php
                for ($i = 0; $i < count($data) ; $i++) { 
                    ?>
                    <tr>
                        <td><?php echo $data[$i]['NIM'];?></td>
                        <td><?php echo $data[$i]['Nama'];?></td>
                        <td><?php echo $data[$i]['Email'];?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </body>
</html>

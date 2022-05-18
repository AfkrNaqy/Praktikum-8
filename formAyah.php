<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Ayah Kandung</title>
</head>
<body>
    <h1 align="center">FORMULIR PENDAFTARAN PHP</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <table>
            <tr>
                <td>
                    <h3>DATA AYAH KANDUNG</h3>
                </td>
            </tr>
            <tr>
                <td>Nama Ayah Kandung</td>
                <td><input type="text" name="ayah-nama"></td>
            </tr>
            <tr>
                <td>Tahun Lahir</td>
                <td><input type="text" name="ayah-tahun" id=""></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td><input type="text" name="ayah-pendidikan" id=""></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="ayah-pekerjaan" id=""></td>
            </tr>
            <tr>
                <td>Penghasilan Bulanan</td>
                <td><input type="text" name="ayah-hasil" id=""></td>
            </tr>
            <tr>
                <td>Berkebutuhan Khusus</td>
                <td><input type="text" name="ayah-khusus" id=""></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                    <button><a href="formIbu.php">Next</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
<?php
    // === VAR ERROR DATA AYAH ===
    $error_ayahNama = $error_ayahTahun = $error_ayahPendidikan = $error_ayahPekerjaan = $error_ayahHasil = $error_ayahKhusus = "";
    
    $ayah_Nama = $ayah_Tahun = $ayah_Pendidikan = $ayah_Pekerjaan = $ayah_Hasil = $ayah_Khusus = "";

    include "conect.php";
    $berhasil = false;

    $query = "INSERT INTO tb_ayah VALUES('$ayah_Nama','$ayah_Tahun','$ayah_Pendidikan','$ayah_Pekerjaan','$ayah_Hasil','$ayah_Khusus')";

    function cek_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if (empty($_POST["ayah-nama"])) {
            $error_ayahNama = "Nama tidak boleh kosong";
        } else{
            $ayah_Nama = cek_input($_POST["ayah-nama"]);
            if (!preg_match('/^[a-za-z ]*$/',$ayah_Nama)) {
                $error_ayahNama ="Inputan hanya boleh huruf dan spasi";
            }
            $berhasil = true;
        }

        // ===>>> Tahun
        if (empty($_POST["ayah-tahun"])) {
            $error_ayahTahun = "Tahun tidak boleh kosong";
        } else{
            $ayah_Tahun = cek_input($_POST["ayah-tahun"]);
            if (!is_numeric($ayah_Tahun)) {
                $error_ayahTahun = "Tahun hanya boleh angka";
            }
            $berhasil = true;
        }

        // ===>>> pendidikan
        if (empty($_POST["ayah-pendidikan"])) {
            $error_ayahPendidikan = "Pendidikan tidak boleh kosong";
        } else{
            $ayah_Pendidikan = cek_input($_POST["ayah-pendidikan"]);
            $berhasil = true;
        }
        // ===>>> pekerjaan
        if (empty($_POST["ayah-pekerjaan"])) {
            $error_ayahPekerjaan = "Pekerjaan tidak boleh kosong";
        } else{
            $ayah_Pekerjaan = cek_input($_POST["ayah-pekerjaan"]);
            $berhasil = true;
        }
        // ===>>> Penghasilan
        if (empty($_POST["ayah-hasil"])) {
            $error_ayahHasil = "Penghasilan tidak boleh kosong";
        } else{
            $ayah_Hasil = cek_input($_POST["ayah-hasil"]);
            if (!is_numeric($ayah_Hasil)) {
                $error_ayahHasil = "Penghasilan hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> kebutuhan khusus
        if (empty($_POST["ayah-khusus"])) {
            $error_ayahKhusus = "Keterangan tidak boleh kosong";
        } else{
            $ayah_Khusus = cek_input($_POST["ayah-khusus"]);
            $berhasil = true;
        }

        if ($berhasil == true) {
            if (mysqli_query($conn,$query)) {
                echo "Data Success Recorded";
            } else{
                echo "error". $query ."<br>". mysqli_error($conn);
            }
        }
        mysqli_close($conn);

    }
?>
</html>
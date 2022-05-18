<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Ibu Kandung</title>
</head>
<body>
    <h1 align="center">FORMULIR PENDAFTARAN PHP</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <table>

            <tr>
                <td>
                    <h3>DATA IBU KANDUNG</h3>
                </td>
            </tr>
            <tr>
                <td>Nama Ibu Kandung</td>
                <td><input type="text" name="ibu-nama"></td>
            </tr>
            <tr>
                <td>Tahun Lahir</td>
                <td><input type="text" name="ibu-tahun" id=""></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td><input type="text" name="ibu-pendidikan" id=""></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="ibu-pekerjaan" id=""></td>
            </tr>
            <tr>
                <td>Penghasilan Bulanan</td>
                <td><input type="text" name="ibu-hasil" id=""></td>
            </tr>
            <tr>
                <td>Berkebutuhan Khusus</td>
                <td><input type="text" name="ibu-khusus" id=""></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                    <button><a href="formulirPendaftaran.php">Back</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
<?php
    // === VAR  ERROR DATA IBU ===
    $error_ibuNama = $error_ibuTahun = $error_ibuPendidikan = $error_ibuPekerjaan = $error_ibuHasil = $error_ibuKhusus = "";
    
    $ibu_Nama = $ibu_Tahun = $ibu_Pendidikan = $ibu_Pekerjaan = $ibu_Hasil = $ibu_Khusus = "";

    include "conect.php";
    $berhasil = false;

    $query = "INSERT INTO tb_ibu VALUES('$ibu_Nama','$ibu_Tahun','$ibu_Pendidikan','$ibu_Pekerjaan','$ibu_Hasil','$ibu_Khusus')";

    function cek_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if (empty($_POST["ibu-nama"])) {
            $error_ibuNama = "Nama tidak boleh kosong";
        } else{
            $ibu_Nama = cek_input($_POST["ibu-nama"]);
            if (!preg_match('/^[a-za-z ]*$/',$ibu_Nama)) {
                $error_ibuNama ="Inputan hanya boleh huruf dan spasi";
            }
            $berhasil = true;
        }

        // ===>>> Tahun
        if (empty($_POST["ibu-tahun"])) {
            $error_ibuTahun = "Tahun tidak boleh kosong";
        } else{
            $ibu_Tahun = cek_input($_POST["ibu-tahun"]);
            if (!is_numeric($ibu_Tahun)) {
                $error_ibuTahun = "Tahun hanya boleh angka";
            }
            $berhasil = true;
        }

        // ===>>> pendidikan
        if (empty($_POST["ibu-pendidikan"])) {
            $error_ibuPendidikan = "Pendidikan tidak boleh kosong";
        } else{
            $ibu_Pendidikan = cek_input($_POST["ibu-pendidikan"]);
            $berhasil = true;
        }
        // ===>>> pekerjaan
        if (empty($_POST["ibu-pekerjaan"])) {
            $error_ibuPekerjaan = "Pekerjaan tidak boleh kosong";
        } else{
            $ibu_Pekerjaan = cek_input($_POST["ibu-pekerjaan"]);
            $berhasil = true;
        }
        // ===>>> Penghasilan
        if (empty($_POST["ibu-hasil"])) {
            $error_ibuHasil = "Penghasilan tidak boleh kosong";
        } else{
            $ibu_Hasil = cek_input($_POST["ibu-hasil"]);
            if (!is_numeric($ibu_Hasil)) {
                $error_ibuHasil = "Penghasilan hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> kebutuhan khusus
        if (empty($_POST["ibu-khusus"])) {
            $error_ibuKhusus = "Keterangan tidak boleh kosong";
        } else{
            $ibu_Khusus = cek_input($_POST["ibu-khusus"]);
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
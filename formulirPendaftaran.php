<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Praktikum 8</title>
</head>
<body>
    <h1 align="center">FORMULIR PENDAFTARAN PHP</h1>

    <!-- === FORM REGISTRASI PESERTA DIDIK === -->
    <div class="data-peserta-didik">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <table>
                <tr>
                    <td>
                        <h3>REGISTRASI PESERTA DIDIK</h3>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Pendaftaran</td>
                    <td><input type="text" name="regis-pendaftaran" ></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk Sekolah</td>
                    <td><input type="text" name="regis-masuk" ></td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td><input type="text" name="regis-nis" ></td>
                </tr>
                <tr>
                    <td>Nomor Peserta Ujian</td>
                    <td><input type="text" name="regis-noPeserta" ></td>
                </tr>
                <tr>
                    <td>Apakah Pernah Paud</td>
                    <td>
                        <input type="radio" name="regis-paud" value="Ya" id="paud-ya">
                        <label for="paud-ya">Ya</label>
                    </td>
                    <td>
                        <input type="radio" name="regis-paud" value="Tidak" id="paud-tidak">
                        <label for="paud-tidak">Tidak</label>
                    </td>
                </tr>
                <tr>
                    <td>Apakah Pernah TK</td>
                    <td>
                        <input type="radio" name="regis-tk" value="Ya" id="tk-ya">
                        <label for="tk-ya">Ya</label>
                    </td>
                    <td>
                        <input type="radio" name="regis-tk" value="Tidak" id="tk-tidak">
                        <label for="tk-tidak">Tidak</label>
                    </td>
                </tr>
                <tr>
                    <td>No. Seri SKHUN Sebelumnya</td>
                    <td><input type="text" name="regis-skhun" ></td>
                </tr>
                <tr>
                    <td>No. Seri Ijazah Sebelumnya</td>
                    <td><input type="text" name="regis-ijazah" ></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td><input type="text" name="regis-hobi" ></td>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td><input type="text" name="regis-cita" ></td>
                </tr>

                <!-- === DATA PRIBADI === -->
                <tr>
                    <td>
                        <h3>DATA PRIBADI</h3>
                    </td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="pribadi-nama" id=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="pribadi-kelamin" value="Laki-laki" id="lk">
                        <label for="lk">Laki-laki</label>
                    </td>
                    <td>
                        <input type="radio" name="pribadi-kelamin" value="Perempuan" id="pr">
                        <label for="pr">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td><input type="text" name="pribadi-nisn" id=""></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><input type="text" name="pribadi-nik" id=""></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="pribadi-tempatLahir" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="text" name="pribadi-tglLahir" id=""></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type="text" name="pribadi-agama" id=""></td>
                </tr>
                <tr>
                    <td>Berkebutuhan Khusus</td>
                    <td><input type="text" name="pribadi-khusus" id=""></td>
                </tr>
                <tr>
                    <td>Alamat Jalan</td>
                    <td><input type="text" name="pribadi-jalan" id=""></td>
                </tr>
                <tr>
                    <td>RT</td>
                    <td><input type="text" name="pribadi-rt" id=""></td>
                </tr>
                <tr>
                    <td>RW</td>
                    <td><input type="text" name="pribadi-rw" id=""></td>
                </tr>
                <tr>
                    <td>Nama Dusun</td>
                    <td><input type="text" name="pribadi-dusun" id=""></td>
                </tr>
                <tr>
                    <td>Nama Kelurahan/Desa</td>
                    <td><input type="text" name="pribadi-kelurahan" id=""></td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td><input type="text" name="pribadi-kecamatan" id=""></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td><input type="text" name="pribadi-pos" id=""></td>
                </tr>
                <tr>
                    <td>Tempat Tinggal</td>
                    <td><input type="text" name="pribadi-tempatTinggal" id=""></td>
                </tr>
                <tr>
                    <td>Moda Transportasi</td>
                    <td><input type="text" name="pribadi-transportasi" id=""></td>
                </tr>
                <tr>
                    <td>Nomor HP</td>
                    <td><input type="text" name="pribadi-hp" id=""></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td><input type="text" name="pribadi-telepon" id=""></td>
                </tr>
                <tr>
                    <td>Email Pribadi</td>
                    <td><input type="text" name="pribadi-email" id=""></td>
                </tr>
                <tr>
                    <td>Penerima KPS/PKH/KIP</td>
                    <td>
                        <input type="radio" name="pribadi-kps" value="Ya" id="kps-ya">
                        <label for="kps-ya">Ya</label>
                    </td>
                    <td>
                        <input type="radio" name="pribadi-kps" value="Tidak" id="kps-tidak">
                        <label for="kps-tidak">Tidak</label>
                    </td>
                </tr>
                <tr>
                    <td>No KPS/PKH/KIP</td>
                    <td><input type="text" name="pribadi-noKps" id=""></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>
                        <input type="radio" name="pribadi-negara" value="Indonesia" id="ina">
                        <label for="ina">Indonesia (WNI)</label>
                    </td>
                    <td>
                        <input type="radio" name="pribadi-negara" value="Asing" id="asing">
                        <label for="asing">Asing (WNA)</label>
                    </td>
                    <td>Nama Negara <input type="text" name="pribadi-negara" id="lain"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Submit</button>
                        <button><a href="formAyah.php">Next</a></button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    
</body>

<!-- === PHP === -->
<?php
    // === VAR REGISTRASI ===
    $error_regisPendaftaran = "";
    $error_regisTanggalMasuk = "";
    $error_regisNIS = "";
    $error_regisNomorPeserta = "";
    $error_regisPaud = "";
    $error_regisTk = "";
    $error_regisSkhun = "";
    $error_regisIjazah = "";
    $error_regisHobi = "";
    $error_regisCita = "";

    $regis_pendaftaran = $regis_tanggalMasuk = $regis_nis = $regis_nomorPeserta = $regis_paud = "";
    $regis_tk = $regis_skhun = $regis_ijazah = $regis_hobi = $regis_cita = ""; 

    // === VAR DATA PRIBADI ===
    $error_pribadiNama = $error_pribadiKelamin = $error_pribadiNisn = $error_pribadiNik = $error_pribadiTempatLahir = "";
    $error_pribadiTglLahir = $error_pribadiAgama = $error_pribadiKhusus = $error_pribadiJalan = $error_pribadiRt = "";
    $error_pribadiRw = $error_pribadiDusun = $error_pribadiKelurahan = $error_pribadiKecamatan = $error_pribadiPos = "";
    $error_pribadiTempatTinggal = $error_pribadiTransportasi = $error_pribadiHp = $error_pribadiTelepon = $error_pribadiEmail = "";
    $error_pribadiKps = $error_pribadiNoKps = $error_pribadiNegara = "";
    
    $pribadi_Nama = $pribadi_Kelamin = $pribadi_Nisn = $pribadi_Nik = $pribadi_TempatLahir = "";
    $pribadi_TglLahir = $pribadi_Agama = $pribadi_Khusus = $pribadi_Jalan = $pribadi_Rt = "";
    $pribadi_Rw = $pribadi_Dusun = $pribadi_Kelurahan = $pribadi_Kecamatan = $pribadi_Pos = "";
    $pribadi_TempatTinggal = $pribadi_Transportasi = $pribadi_Hp = $pribadi_Telepon = $pribadi_Email = "";
    $pribadi_Kps = $pribadi_NoKps = $pribadi_Negara = "";


    $berhasil = false;
    include "conect.php";

    $query = "INSERT INTO tb_siswa VALUES(
        '$regis_pendaftaran','$regis_tanggalMasuk','$regis_nis','$regis_nomorPeserta','$regis_paud','$regis_tk','$regis_skhun','$regis_ijazah',
        '$regis_hobi','$regis_cita',
        '$pribadi_Nama' , '$pribadi_Kelamin' , '$pribadi_Nisn' , '$pribadi_Nik' , '$pribadi_TempatLahir' , 
        '$pribadi_TglLahir' , '$pribadi_Agama' , '$pribadi_Khusus' , '$pribadi_Jalan' , '$pribadi_Rt' , 
        '$pribadi_Rw' , '$pribadi_Dusun' , '$pribadi_Kelurahan' , '$pribadi_Kecamatan' , '$pribadi_Pos' , 
        '$pribadi_TempatTinggal' , '$pribadi_Transportasi' , '$pribadi_Hp' , '$pribadi_Telepon' , '$pribadi_Email' , 
        '$pribadi_Kps' , '$pribadi_NoKps' , '$pribadi_Negara') ";    

    function cek_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    // === INPUT NILAI VARIABEL KE DATABASE ===
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // ===>>> Jenis pendaftaran
        if (empty($_POST["regis-pendaftaran"])) {
            $error_regisPendaftaran = "Jenis pendaftaran tidak boleh kosong";
        } else{
            $regis_pendaftaran = cek_input($_POST["regis-pendaftaran"]);
            $berhasil = true;
        }
        // ===>>> Tanggal masuk sekolah
        if (empty($_POST["regis-masuk"])) {
            $error_regisTanggalMasuk = "Jenis pendaftaran tidak boleh kosong";
        } else{
            $regis_tanggalMasuk = cek_input($_POST["regis-masuk"]);
            $berhasil = true;
        }
        // ===>>> NIS
        if (empty($_POST["regis-nis"])) {
            $error_regisNIS = "NIS tidak boleh kosong";
        } else{
            $regis_nis = cek_input($_POST["regis-nis"]);
            if (!is_numeric($regis_nis)) {
                $error_regisNIS = "NIS hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> Nomor peserta Ujian
        if (empty($_POST["regis-noPeserta"])) {
            $error_regisNomorPeserta = "Nomor Peserta tidak boleh kosong";
        } else{
            $regis_nomorPeserta = cek_input($_POST["regis-noPeserta"]);
            if (!is_numeric($regis_nomorPeserta)) {
                $error_regisNomorPeserta = "Nomer Peserta hanya boleh angka";
            }
            $berhasil = true;
        }

        // ===>>> apakah pernah paud
        if (empty($_POST["regis-paud"])) {
            $error_regisPaud = "Pilihan tidak boleh kosong";
        } else{
            $regis_paud = cek_input($_POST["regis-paud"]);
            $berhasil = true;
        }
        // ===>>> Apakah pernah tk
        if (empty($_POST["regis-tk"])) {
            $error_regisTk = "Pilihan tidak boleh kosong";
        } else{
            $regis_tk = cek_input($_POST["regis-tk"]);
            $berhasil = true;
        }
        // ===>>> Seri skhun sebelumnya
        if (empty($_POST["regis-skhun"])) {
            $error_regisSkhun = "Nomor SKHUN tidak boleh kosong";
        } else{
            $regis_skhun = cek_input($_POST["regis-skhun"]);
            if (!is_numeric($regis_skhun)) {
                $error_regisSkhun = "Nomer SKHUN hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> seri Ijazah
        if (empty($_POST["regis-ijazah"])) {
            $error_regisIjazah = "Nomor Ijazah tidak boleh kosong";
        } else{
            $regis_ijazah = cek_input($_POST["regis-ijazah"]);
            if (!is_numeric($regis_ijazah)) {
                $error_regisIjazah = "Nomer Ijazah hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> Hobi
        if (empty($_POST["regis-hobi"])) {
            $error_regisHobi = "Hobi tidak boleh kosong";
        } else{
            $regis_hobi = cek_input($_POST["regis-hobi"]);
            $berhasil = true;
        }
        // ===>>> Cita Cita
        if (empty($_POST["regis-cita"])) {
            $error_regisCita = "Cita-cita tidak boleh kosong";
        } else{
            $regis_cita = cek_input($_POST["regis-cita"]);
            $berhasil = true;
        }
        
        // ===>>> Nama Lengkap
        if (empty($_POST["pribadi-nama"])) {
            $error_pribadiNama = "Nama tidak boleh kosong";
        } else{
            $pribadi_Nama = cek_input($_POST["pribadi-nama"]);
            if (!preg_match('/^[a-za-z ]*$/',$pribadi_Nama)) {
                $error_pribadiNama ="Inputan hanya boleh huruf dan spasi";
            }
            $berhasil = true;
        }
        // ===>>> Jenis Kelamin
        if (empty($_POST["pribadi-kelamin"])) {
            $error_pribadiKelamin = "Pilihan tidak boleh kosong";
        } else{
            $pribadi_Kelamin = cek_input($_POST["pribadi-kelamin"]);
            $berhasil = true;
        }
        // ===>>> NISN
        if (empty($_POST["pribadi-nisn"])) {
            $error_pribadiNisn = "NISN tidak boleh kosong";
        } else{
            $pribadi_Nisn = cek_input($_POST["pribadi-nisn"]);
            if (!is_numeric($pribadi_Nisn)) {
                $error_pribadiNisn = "NISN hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> NIK
        if (empty($_POST["pribadi-nik"])) {
            $error_pribadiNik = "NIK tidak boleh kosong";
        } else{
            $pribadi_Nik = cek_input($_POST["pribadi-nik"]);
            if (!is_numeric($pribadi_Nik)) {
                $error_pribadiNik = "NIK hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> Tempat lahir
        if (empty($_POST["pribadi-tempatLahir"])) {
            $error_pribadiTempatLahir = "Tempat lahir tidak boleh kosong";
        } else{
            $pribadi_TempatLahir = cek_input($_POST["pribadi-tempatLahir"]);
            $berhasil = true;
        }
        // ===>>> tanggal lahir
        if (empty($_POST["pribadi-tglLahir"])) {
            $error_pribadiTglLahir = "tanggal lahir tidak boleh kosong";
        } else{
            $pribadi_TglLahir = cek_input($_POST["pribadi-tglLahir"]);
            $berhasil = true;
        }
        // ===>>> agama
        if (empty($_POST["pribadi-agama"])) {
            $error_pribadiAgama = "agama tidak boleh kosong";
        } else{
            $pribadi_Agama = cek_input($_POST["pribadi-agama"]);
            $berhasil = true;
        }
        // ===>>> Berkebutuhan khusus
        if (empty($_POST["pribadi-khusus"])) {
            $error_pribadiKhusus = "Keterangan tidak boleh kosong";
        } else{
            $pribadi_Khusus = cek_input($_POST["pribadi-khusus"]);
            $berhasil = true;
        }
        // ===>>> alamat jalan
        if (empty($_POST["pribadi-jalan"])) {
            $error_pribadiJalan = "Alamat Jalan tidak boleh kosong";
        } else{
            $pribadi_Jalan = cek_input($_POST["pribadi-jalan"]);
            $berhasil = true;
        }
        // ===>>> rt
        if (empty($_POST["pribadi-rt"])) {
            $error_pribadiRt = "RT tidak boleh kosong";
        } else{
            $pribadi_Rt = cek_input($_POST["pribadi-rt"]);
            if (!is_numeric($pribadi_Rt)) {
                $error_pribadiRt = "RT hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> rw
        if (empty($_POST["pribadi-rw"])) {
            $error_pribadiRw = "RW tidak boleh kosong";
        } else{
            $pribadi_Rw = cek_input($_POST["pribadi-rw"]);
            if (!is_numeric($pribadi_Rw)) {
                $error_pribadiRw = "RW hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> Dusun
        if (empty($_POST["pribadi-dusun"])) {
            $error_pribadiDusun = "Nama dusun tidak boleh kosong";
        } else{
            $pribadi_Dusun = cek_input($_POST["pribadi-dusun"]);
            $berhasil = true;
        }
        // ===>>> Kelurahan
        if (empty($_POST["pribadi-kelurahan"])) {
            $error_pribadiKelurahan = "Kelurahan tidak boleh kosong";
        } else{
            $pribadi_Kelurahan = cek_input($_POST["pribadi-kelurahan"]);
            $berhasil = true;
        }
        // ===>>> Kecamatan
        if (empty($_POST["regis-masuk"])) {
            $error_regisTanggalMasuk = "Kecamatan tidak boleh kosong";
        } else{
            $regis_tanggalMasuk = cek_input($_POST["regis-masuk"]);
            $berhasil = true;
        }
        // ===>>> kode pos
        if (empty($_POST["pribadi-pos"])) {
            $error_pribadiPos = "Kode pos tidak boleh kosong";
        } else{
            $pribadi_Pos = cek_input($_POST["pribadi-pos"]);
            if (!is_numeric($pribadi_Pos)) {
                $error_pribadiPos = "Kode pos hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> Tempat tinggal
        if (empty($_POST["pribadi-tempatTinggal"])) {
            $error_pribadiTempatTinggal = "Tempat tinggal tidak boleh kosong";
        } else{
            $pribadi_TempatTinggal = cek_input($_POST["pribadi-tempatTinggal"]);
            $berhasil = true;
        }
        // ===>>> moda transportasi
        if (empty($_POST["pribadi-transportasi"])) {
            $error_pribadiTransportasi = "Transportasi tidak boleh kosong";
        } else{
            $pribadi_Transportasi = cek_input($_POST["pribadi-transportasi"]);
            $berhasil = true;
        }
        // ===>>> nomor hp
        if (empty($_POST["pribadi-hp"])) {
            $error_pribadiHp = "Nomor HP tidak boleh kosong";
        } else{
            $pribadi_Hp = cek_input($_POST["pribadi-hp"]);
            if (!is_numeric($pribadi_Hp)) {
                $error_pribadiHp = "Nomer HP hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> nomor telepon
        if (empty($_POST["pribadi-telepon"])) {
            $error_pribadiTelepon = "Nomor Telepon tidak boleh kosong";
        } else{
            $pribadi_Telepon = cek_input($_POST["pribadi-telepon"]);
            if (!is_numeric($pribadi_Telepon)) {
                $error_pribadiTelepon = "Nomer Telepon hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> email pribadi
        if (empty($_POST['pribadi-email'])) {
            $error_pribadiEmail = "Email tidak boleh kosong";
        } else{
            $pribadi_Email = cek_input($_POST['pribadi-email']);
            if (!filter_var($pribadi_Email, FILTER_VALIDATE_EMAIL)) {
                $error_pribadiEmail = "Format email invalid";
            }
        }
        // ===>>> penerima kps
        if (empty($_POST["pribadi-kps"])) {
            $error_pribadiKps = "pilihan tidak boleh kosong pendaftaran tidak boleh kosong";
        } else{
            $pribadi_Kps = cek_input($_POST["pribadi-kps"]);
            $berhasil = true;
        }
        // ===>>> no kps
        if (empty($_POST["pribadi-noKps"])) {
            $error_pribadiNoKps = "Nomor KPS tidak boleh kosong";
        } else{
            $pribadi_Kps = cek_input($_POST["pribadi-noKps"]);
            if (!is_numeric($pribadi_Kps)) {
                $error_pribadiNoKps = "Nomer KPS hanya boleh angka";
            }
            $berhasil = true;
        }
        // ===>>> Kewarganegaraan
        if (empty($_POST["pribadi_Kps"])) {
            $error_pribadiNegara = "Pilihan tidak boleh kosong";
        } else{
            $pribadi_Negara = cek_input($_POST["pribadi_Kps"]);
            $berhasil = true;
        }
        if ($berhasil == true) {
            if (mysqli_query($conn,$query)) {
                echo "Data Success Recorded";
            } else{
                echo "error". $sql ."<br>". mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }
?>
</html>
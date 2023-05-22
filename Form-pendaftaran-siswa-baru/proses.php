<?php
include "koneksi.php";

$jenis_pendaftaran=$_POST['jenis_pendaftaran'];
$tgl_masuk=$_POST['tgl_masuk'];
$NIS=$_POST['NIS'];
$no_ujian=$_POST['no_ujian'];
$PAUD=$_POST['PAUD'];
$TK=$_POST['TK'];
$no_SKHUN=$_POST['no_SKHUN'];
$no_ijazah=$_POST['no_ijazah'];
$hobi=$_POST['hobi'];
$cita=$_POST['cita'];
$nama=$_POST['nama'];
$jkel=$_POST['jkel'];
$NISN=$_POST['NISN'];
$nik=$_POST['nik'];
$tmpt_lahir=$_POST['tmpt_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$agama	=$_POST['agama'];
$keb_khusus=$_POST['keb_khusus'];
$alamat=$_POST['alamat'];
$RT=$_POST['RT'];
$RW=$_POST['RW'];
$dusun=$_POST['dusun'];
$kelurahan=$_POST['kelurahan'];
$kecamatan=$_POST['kecamatan'];
$kode_pos=$_POST['kode_pos'];
$temp_tinggal=$_POST['temp_tinggal'];
$transport=$_POST['transport'];
$no_hp	=$_POST['no_hp'];
$no_telp=$_POST['no_telp'];
$email	=$_POST['email'];
$kip=$_POST['kip'];
$kwn=$_POST['kwn'];
$nama_ayah=$_POST['nama_ayah'];
$thn_ayah=$_POST['thn_ayah'];
$pen_ayah=$_POST['pen_ayah'];
$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
$pendapatan_ayah=$_POST['pendapatan_ayah'];
$keb_khusus_ayah=$_POST['keb_khusus_ayah'];
$nama_ibu=$_POST['nama_ibu'];
$thn_ibu=$_POST['thn_ibu'];
$pen_ibu=$_POST['pen_ibu'];
$pekerjaan_ibu	=$_POST['pekerjaan_ibu'];
$pendapatan_ibu=$_POST['pendapatan_ibu'];
$keb_khusus_ibu=$_POST['keb_khusus_ibu'];
//query untuk memasukan data ke tabel registrasi siswa
$query1 = "INSERT INTO registrasi_siswa (jenis_pendaftaran, tgl_masuk, NIS, no_ujian, PAUD, TK, no_SKHUN, no_ijazah, hobi, cita) 
           VALUES ('$jenis_pendaftaran', '$tgl_masuk', '$NIS', '$no_ujian', '$PAUD', '$TK', '$no_SKHUN', '$no_ijazah', '$hobi', '$cita')";

// Menjalankan query1
if (mysqli_query($koneksi, $query1)) {
    echo "Data registrasi siswa berhasil dimasukkan.<br>";
} else {
    echo "Error: " . $query1 . "<br>" . mysqli_error($koneksi);
}

// Query untuk memasukkan data ke tabel data_siswa
$query2 = "INSERT INTO data_siswa (nama, jkel, NISN, nik, tmpt_lahir, tgl_lahir, agama, keb_khusus, alamat, RT, RW, dusun, kelurahan, kecamatan, kode_pos, temp_tinggal, transport, no_hp, no_telp, email, kip, kwn) 
           VALUES ('$nama', '$jkel', '$NISN', '$nik', '$tmpt_lahir', '$tgl_lahir', '$agama', '$keb_khusus', '$alamat', '$RT', '$RW', '$dusun', '$kelurahan', '$kecamatan', '$kode_pos', '$temp_tinggal', '$transport', '$no_hp', '$no_telp', '$email', '$kip', '$kwn')";

// Menjalankan query2
if (mysqli_query($koneksi, $query2)) {
    echo "Data siswa berhasil dimasukkan.<br>";
} else {
    echo "Error: " . $query2 . "<br>" . mysqli_error($koneksi);
}

// Query untuk memasukkan data ke tabel ortu_ayah
$query3 = "INSERT INTO ortu_ayah (nama, thn_lahir, pendidikan, pekerjaan, penghasilan, keb_khusus) 
           VALUES ('$nama_ayah', '$thn_ayah', '$pen_ayah', '$pekerjaan_ayah', '$pendapatan_ayah', '$keb_khusus_ayah')";

// Menjalankan query3
if (mysqli_query($koneksi, $query3)) {
    echo "Data orang tua (ayah) berhasil dimasukkan.<br>";
} else {
    echo "Error: " . $query3 . "<br>" . mysqli_error($koneksi);
}

// Query untuk memasukkan data ke tabel ortu_ibu
$query4 = "INSERT INTO ortu_ibu (nama, thn_lahir, pendidikan, pekerjaan, penghasilan, keb_khusus) 
           VALUES ('$nama_ibu', '$thn_ibu', '$pen_ibu', '$pekerjaan_ibu', '$pendapatan_ibu', '$keb_khusus_ibu')";

// Menjalankan query4
if (mysqli_query($koneksi, $query4)) {
    echo "Data orang tua (ibu) berhasil dimasukkan.<br>";
} else {
    echo "Error: " . $query4 . "<br>" . mysqli_error($koneksi);
}
echo '<b>Registrasi berhasil!</b>';
header("location:tampil_regis.php");

?>




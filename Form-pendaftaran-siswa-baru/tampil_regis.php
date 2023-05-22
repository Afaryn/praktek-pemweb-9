<?php
include "koneksi.php";
// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel registrasi_siswa
$query1 = "SELECT * FROM registrasi_siswa";
$result1 = mysqli_query($koneksi, $query1);

if (mysqli_num_rows($result1) > 0) {
    echo "<h2>Data Registrasi Siswa:</h2>";
    echo "<table>";
    echo "<tr><th>Jenis Pendaftaran</th><th>Tanggal Masuk</th><th>NIS</th><th>No. Ujian</th><th>PAUD</th><th>TK</th><th>No. SKHUN</th><th>No. Ijazah</th><th>Hobi</th><th>Cita</th></tr>";
    while ($row = mysqli_fetch_assoc($result1)) {
        echo "<tr>";
        echo "<td>".$row['jenis_pendaftaran']."</td>";
        echo "<td>".$row['tgl_masuk']."</td>";
        echo "<td>".$row['NIS']."</td>";
        echo "<td>".$row['no_ujian']."</td>";
        echo "<td>".$row['PAUD']."</td>";
        echo "<td>".$row['TK']."</td>";
        echo "<td>".$row['no_SKHUN']."</td>";
        echo "<td>".$row['no_ijazah']."</td>";
        echo "<td>".$row['hobi']."</td>";
        echo "<td>".$row['cita']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data Registrasi Siswa.";
}

// Query untuk mengambil data dari tabel data_siswa
$query2 = "SELECT * FROM data_siswa";
$result2 = mysqli_query($koneksi, $query2);

if (mysqli_num_rows($result2) > 0) {
    echo "<h2>Data Siswa:</h2>";
    echo "<table>";
    echo "<tr><th>Nama</th><th>Jenis Kelamin</th><th>NISN</th><th>NIK</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Agama</th><th>Kebutuhan Khusus</th><th>Alamat</th><th>RT</th><th>RW</th><th>Dusun</th><th>Kelurahan</th><th>Kecamatan</th><th>Kode Pos</th><th>Tempat Tinggal</th><th>Transportasi</th><th>No. HP</th><th>No. Telepon</th><th>Email</th><th>KIP</th><th>Kewarganegaraan</th></tr>";
    while ($row = mysqli_fetch_assoc($result2)) {
        echo "<tr>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['jkel']."</td>";
        echo "<td>".$row['NISN']."</td>";
        echo "<td>".$row['nik']."</td>";
        echo "<td>".$row['tmpt_lahir']."</td>";
        echo "<td>".$row['tgl_lahir']."</td>";
        echo "<td>".$row['agama']."</td>";
        echo "<td>".$row['keb_khusus']."</td>";
        echo "<td>".$row['alamat']."</td>";
        echo "<td>".$row['RT']."</td>";
        echo "<td>".$row['RW']."</td>";
        echo "<td>".$row['dusun']."</td>";
        echo "<td>".$row['kelurahan']."</td>";
        echo "<td>".$row['kecamatan']."</td>";
        echo "<td>".$row['kode_pos']."</td>";
        echo "<td>".$row['temp_tinggal']."</td>";
        echo "<td>".$row['transport']."</td>";
        echo "<td>".$row['no_hp']."</td>";
        echo "<td>".$row['no_telp']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['kip']."</td>";
        echo "<td>".$row['kwn']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data Siswa.";
}

// Query untuk mengambil data dari tabel ortu_ayah
$query3 = "SELECT * FROM ortu_ayah";
$result3 = mysqli_query($koneksi, $query3);

if (mysqli_num_rows($result3) > 0) {
    echo "<h2>Data Orang Tua (Ayah):</h2>";
    echo "<table>";
    echo "<tr><th>Nama Ayah</th><th>Tahun Lahir Ayah</th><th>Pendidikan Ayah</th><th>Pekerjaan Ayah</th><th>Pendapatan Ayah</th><th>Kebutuhan Khusus Ayah</th></tr>";
    while ($row = mysqli_fetch_assoc($result3)) {
        echo "<tr>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['thn_lahir']."</td>";
        echo "<td>".$row['pendidikan']."</td>";
        echo "<td>".$row['pekerjaan']."</td>";
        echo "<td>".$row['penghasilan']."</td>";
        echo "<td>".$row['keb_khusus']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data Orang Tua (Ayah).";
}

// Query untuk mengambil data dari tabel ortu_ibu
$query4 = "SELECT * FROM ortu_ibu";
$result4 = mysqli_query($koneksi, $query4);

if (mysqli_num_rows($result4) > 0) {
    echo "<h2>Data Orang Tua (Ibu):</h2>";
    echo "<table>";
    echo "<tr><th>Nama Ibu</th><th>Tahun Lahir Ibu</th><th>Pendidikan Ibu</th><th>Pekerjaan Ibu</th><th>Pendapatan Ibu</th><th>Kebutuhan Khusus Ibu</th></tr>";
    while ($row = mysqli_fetch_assoc($result4)) {
        echo "<tr>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['thn_lahir']."</td>";
        echo "<td>".$row['pendidikan']."</td>";
        echo "<td>".$row['pekerjaan']."</td>";
        echo "<td>".$row['penghasilan']."</td>";
        echo "<td>".$row['keb_khusus']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data Orang Tua (Ibu).";
}
echo "<br><br><a href='reportdata.php'>export</a>";
// Menutup koneksi database
mysqli_close($koneksi);
?>



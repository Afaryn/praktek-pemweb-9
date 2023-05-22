<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel registrasi_siswa
$query1 = "SELECT * FROM registrasi_siswa";
$result1 = mysqli_query($koneksi, $query1);

// Query untuk mengambil data dari tabel data_siswa
$query2 = "SELECT * FROM data_siswa";
$result2 = mysqli_query($koneksi, $query2);

// Query untuk mengambil data dari tabel ortu_ayah
$query3 = "SELECT * FROM ortu_ayah";
$result3 = mysqli_query($koneksi, $query3);

// Query untuk mengambil data dari tabel ortu_ibu
$query4 = "SELECT * FROM ortu_ibu";
$result4 = mysqli_query($koneksi, $query4);

if (mysqli_num_rows($result1) > 0 || mysqli_num_rows($result2) > 0 || mysqli_num_rows($result3) > 0 || mysqli_num_rows($result4) > 0) {
    $spreadsheet = new Spreadsheet();

    // Tabel registrasi_siswa
    if (mysqli_num_rows($result1) > 0) {
        $sheet1 = $spreadsheet->getActiveSheet();
        $sheet1->setTitle('Registrasi Siswa');

        $sheet1->setCellValue('A1', 'Jenis Pendaftaran');
        $sheet1->setCellValue('B1', 'Tanggal Masuk');
        $sheet1->setCellValue('C1', 'NIS');
        $sheet1->setCellValue('D1', 'No. Ujian');
        $sheet1->setCellValue('E1', 'PAUD');
        $sheet1->setCellValue('F1', 'TK');
        $sheet1->setCellValue('G1', 'No. SKHUN');
        $sheet1->setCellValue('H1', 'No. Ijazah');
        $sheet1->setCellValue('I1', 'Hobi');
        $sheet1->setCellValue('J1', 'Cita');

        $rowNumber = 2;
        while ($row = mysqli_fetch_assoc($result1)) {
            $sheet1->setCellValue('A' . $rowNumber, $row['jenis_pendaftaran']);
            $sheet1->setCellValue('B' . $rowNumber, $row['tgl_masuk']);
            $sheet1->setCellValue('C' . $rowNumber, $row['NIS']);
            $sheet1->setCellValue('D' . $rowNumber, $row['no_ujian']);
            $sheet1->setCellValue('E' . $rowNumber, $row['PAUD']);
            $sheet1->setCellValue('F' . $rowNumber, $row['TK']);
            $sheet1->setCellValue('G' . $rowNumber, $row['no_SKHUN']);
            $sheet1->setCellValue('H' . $rowNumber, $row['no_ijazah']);
            $sheet1->setCellValue('I' . $rowNumber, $row['hobi']);
            $sheet1->setCellValue('J' . $rowNumber, $row['cita']);

            $rowNumber++;
        }
    }

    // Tabel data_siswa
    if (mysqli_num_rows($result2) > 0) {
        $sheet2 = $spreadsheet->createSheet();
        $sheet2->setTitle('Data Siswa');

        $sheet2->setCellValue('A1', 'Nama');
        $sheet2->setCellValue('B1', 'Jenis Kelamin');
        $sheet2->setCellValue('C1', 'NISN');
        $sheet2->setCellValue('D1', 'NIK');
        $sheet2->setCellValue('E1', 'Tempat Lahir');
        $sheet2->setCellValue('F1', 'Tanggal Lahir');
        $sheet2->setCellValue('G1', 'Agama');
        $sheet2->setCellValue('H1', 'Kebutuhan Khusus');
        $sheet2->setCellValue('I1', 'Alamat');
        $sheet2->setCellValue('J1', 'RT');
        $sheet2->setCellValue('K1', 'RW');
        $sheet2->setCellValue('L1', 'Dusun');
        $sheet2->setCellValue('M1', 'Kelurahan');
        $sheet2->setCellValue('N1', 'Kecamatan');
        $sheet2->setCellValue('O1', 'Kode Pos');
        $sheet2->setCellValue('P1', 'Tempat Tinggal');
        $sheet2->setCellValue('Q1', 'Transportasi');
        $sheet2->setCellValue('R1', 'No. HP');
        $sheet2->setCellValue('S1', 'No. Telepon');
        $sheet2->setCellValue('T1', 'Email');
        $sheet2->setCellValue('U1', 'KIP');
        $sheet2->setCellValue('V1', 'Kewarganegaraan');

        $rowNumber = 2;
        while ($row = mysqli_fetch_assoc($result2)) {
            $sheet2->setCellValue('A' . $rowNumber, $row['nama']);
            $sheet2->setCellValue('B' . $rowNumber, $row['jkel']);
            $sheet2->setCellValue('C' . $rowNumber, $row['NISN']);
            $sheet2->setCellValue('D' . $rowNumber, $row['nik']);
            $sheet2->setCellValue('E' . $rowNumber, $row['tmpt_lahir']);
            $sheet2->setCellValue('F' . $rowNumber, $row['tgl_lahir']);
            $sheet2->setCellValue('G' . $rowNumber, $row['agama']);
            $sheet2->setCellValue('H' . $rowNumber, $row['keb_khusus']);
            $sheet2->setCellValue('I' . $rowNumber, $row['alamat']);
            $sheet2->setCellValue('J' . $rowNumber, $row['RT']);
            $sheet2->setCellValue('K' . $rowNumber, $row['RW']);
            $sheet2->setCellValue('L' . $rowNumber, $row['dusun']);
            $sheet2->setCellValue('M' . $rowNumber, $row['kelurahan']);
            $sheet2->setCellValue('N' . $rowNumber, $row['kecamatan']);
            $sheet2->setCellValue('O' . $rowNumber, $row['kode_pos']);
            $sheet2->setCellValue('P' . $rowNumber, $row['temp_tinggal']);
            $sheet2->setCellValue('Q' . $rowNumber, $row['transport']);
            $sheet2->setCellValue('R' . $rowNumber, $row['no_hp']);
            $sheet2->setCellValue('S' . $rowNumber, $row['no_telp']);
            $sheet2->setCellValue('T' . $rowNumber, $row['email']);
            $sheet2->setCellValue('U' . $rowNumber, $row['kip']);
            $sheet2->setCellValue('V' . $rowNumber, $row['kwn']);

            $rowNumber++;
        }
    }

    // Tabel ortu_ayah
    if (mysqli_num_rows($result3) > 0) {
        $sheet3 = $spreadsheet->createSheet();
        $sheet3->setTitle('Orang Tua (Ayah)');

        $sheet3->setCellValue('A1', 'Nama Ayah');
        $sheet3->setCellValue('B1', 'Tahun Lahir Ayah');
        $sheet3->setCellValue('C1', 'Pendidikan Ayah');
        $sheet3->setCellValue('D1', 'Pekerjaan Ayah');
        $sheet3->setCellValue('E1', 'Pendapatan Ayah');
        $sheet3->setCellValue('F1', 'Kebutuhan Khusus Ayah');

        $rowNumber = 2;
        while ($row = mysqli_fetch_assoc($result3)) {
            $sheet3->setCellValue('A' . $rowNumber, $row['nama']);
            $sheet3->setCellValue('B' . $rowNumber, $row['thn_lahir']);
            $sheet3->setCellValue('C' . $rowNumber, $row['pendidikan']);
            $sheet3->setCellValue('D' . $rowNumber, $row['pekerjaan']);
            $sheet3->setCellValue('E' . $rowNumber, $row['penghasilan']);
            $sheet3->setCellValue('F' . $rowNumber, $row['keb_khusus']);

            $rowNumber++;
        }
    }

    // Tabel ortu_ibu
    if (mysqli_num_rows($result4) > 0) {
        $sheet4 = $spreadsheet->createSheet();
        $sheet4->setTitle('Orang Tua (Ibu)');

        $sheet4->setCellValue('A1', 'Nama Ibu');
        $sheet4->setCellValue('B1', 'Tahun Lahir Ibu');
        $sheet4->setCellValue('C1', 'Pendidikan Ibu');
        $sheet4->setCellValue('D1', 'Pekerjaan Ibu');
        $sheet4->setCellValue('E1', 'Pendapatan Ibu');
        $sheet4->setCellValue('F1', 'Kebutuhan Khusus Ibu');

        $rowNumber = 2;
        while ($row = mysqli_fetch_assoc($result4)) {
            $sheet4->setCellValue('A' . $rowNumber, $row['nama']);
            $sheet4->setCellValue('B' . $rowNumber, $row['thn_lahir']);
            $sheet4->setCellValue('C' . $rowNumber, $row['pendidikan']);
            $sheet4->setCellValue('D' . $rowNumber, $row['pekerjaan']);
            $sheet4->setCellValue('E' . $rowNumber, $row['penghasilan']);
            $sheet4->setCellValue('F' . $rowNumber, $row['keb_khusus']);

            $rowNumber++;
        }
    }

    // Menyimpan ke file Excel
    $writer = new Xlsx($spreadsheet);
    $filename = 'data_siswa.xlsx';
    $writer->save($filename);

    echo "Data berhasil diexport ke file Excel dengan nama '$filename'";
} else {
    echo "Tidak ada data yang dapat diexport.";
}

// Menutup koneksi database

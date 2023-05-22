<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Form Pendaftaran Siswa Baru</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  
    <header class="header">
      <h1 class="header__title">Form Pendaftaran Siswa Baru</h1>
    </header>
    <div class="content">
      <div class="content__inner">
        <div class="container overflow-hidden">
          <div class="multisteps-form">
            <div class="row">
              <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                  <button
                    class="multisteps-form__progress-btn js-active"
                    type="button"
                    title="Registrasi"
                  >
                    Registrasi
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Data Pribadi"
                  >
                    Data Pribadi
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Data Ayah Kandung"
                  >
                    Data Ayah Kandung
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Data Ibu Kandung"
                  >
                    Data Ibu Kandung
                  </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form" method="post" action='proses.php' >
                  <div
                    class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                    data-animation="scaleIn"
                  >
                    <h3 class="multisteps-form__title">Registrasi Peserta Didik</h3>
                    <div class="multisteps-form__content"> 
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="jenis_pendaftaran">Jenis Pendaftaran</label>
                          <select name="jenis_pendaftaran" class="multisteps-form__input form-control">
                            <option value="Siswa Baru">Siswa Baru</option>
                            <option value="Pindahan">Pindahan</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="tgl_masuk">Tanggal Masuk Sekolah</label>
                          <input
                            name="tgl_masuk"
                            class="multisteps-form__input form-control"
                            type="Date"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                          <label for="NIS">NIS</label>
                          <input
                            name="NIS"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="">Nomor Peserta Ujian</label>
                          <input
                            name="no_ujian"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="PAUD">Apakah Pernah PAUD?</label>
                          <div><input type="radio" name="PAUD" value="Y">Ya
                          <input type="radio" name="PAUD" value="T">Tidak</div>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="TK">Apakah Pernah TK?</label>
                          <div><input type="radio" name="TK" value="Y">Ya
                          <input type="radio" name="TK" value="T">Tidak</div>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                          <label for="no_SKHUN">No. seri SKHUN Sebelumnya</label>
                          <input
                            name="no_SKHUN"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="no_ijazah">No. seri Ijazah Sebelumnya</label>
                          <input
                            name="no_ijazah"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="hobi">Hobi</label>
                          <select name="hobi" class="multisteps-form__input form-control">
                            <option value="olahraga">Olahraga</option>
                            <option value="kesenian">Kesenian</option>
                            <option value="membaca">Membaca</option>
                            <option value="menulis">Menulis</option>
                            <option value="travelin">Travelin</option>
                            <option value="lainnya">Lainnya</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="cita">Cita-cita</label>
                          <select name="cita" class="multisteps-form__input form-control">
                            <option value="PNS">PNS</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                            <option value="guru/dosen">Guru/Dosen</option>
                            <option value="dokter">Dokter</option>
                            <option value="politikus">Politikus</option>
                            <option value="wiraswasta">Wiraswaste</option>
                            <option value="seni">Seni</option>
                            <option value="lainnya">Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button
                          class="btn btn-primary ml-auto js-btn-next"
                          type="button"
                          title="Next"
                        >
                          Next
                        </button>
                      </div>
                    </div>
                  </div>

                  <div
                    class="multisteps-form__panel shadow p-4 rounded bg-white"
                    data-animation="scaleIn"
                  >
                    <h3 class="multisteps-form__title">Data Pribadi</h3>
                    <div class="multisteps-form__content">
                      <div class="form-row mt-4">
                        <div class="col">
                        <label for="nama">Nama Lengkap </label>
                          <input
                            name="nama"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col">
                        <label for="jkel">Jenis Kelamin</label>
                        <div>
                            <input type="radio" name="jkel" value="L">Laki-laki
                            <input type="radio" name="jkel" value="P">Perempuan
                        </div>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="NISN">NISN</label>
                          <input
                            name="NISN"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="NIK">NIK</label>
                          <input
                            name="nik"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="tmpt_lahir">Tempat Lahir</label>
                          <input
                            name="tmpt_lahir"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="tgl_lahir">Tanggal Lahir</label>
                          <input
                            name="tgl_lahir"
                            class="multisteps-form__input form-control"
                            type="Date"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="agama">Agama</label>
                          <select name="agama" class="multisteps-form__input form-control">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kong Hu Chu">Kong Hu Chu</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="keb_khusus">Kebutuhan Khusus</label>
                          <select name="keb_khusus" class="multisteps-form__input form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Netra">Netra</option>
                            <option value="Rungu">Rungu</option>
                            <option value="Grahita Ringan">Grahita Ringan</option>
                            <option value="Daksa Ringan">Daksa Ringan</option>
                            <option value="Daksa Sedang">Daksa Sedang</option>
                            <option value="Laras">Laras</option>
                            <option value="Wicara">Wicara</option>
                            <option value="Tuna ganda">Tuna ganda</option>
                            <option value="Hiper Aktif">Hiper Aktif</option>
                            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                            <option value="Bakat Istimewa">Bakat Istimewa</option>
                            <option value="Kesulitan Belajar">Kesulitan Khusus</option>
                            <option value="Narkoba">Narkoba</option>
                            <option value="Indigo">Indigo</option>
                            <option value="Down Sindrome">Down Sindrome</option>
                            <option value="Autis">Autis</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col">
                        <label for="alamat">Alamat Jalan</label>
                          <input
                            name="alamat"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="RT">RT</label>
                          <input
                            name="RT"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="RW">RW</label>
                          <input
                            name="RW"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="dusun">Nama Dusun</label>
                          <input
                            name="dusun"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="kelurahan">Nama Kelurahan/Desa</label>
                          <input
                            name="kelurahan"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="kecamatan">Kecamatan</label>
                          <input
                            name="kecamatan"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="kode_pos">Kode Pos</label>
                          <input
                            name="kode_pos"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="temp_tinggal">Tempat Tinggal</label>
                          <select name="temp_tinggal" class="multisteps-form__input form-control">
                            <option value="Ortu">Bersama Orang Tua</option>
                            <option value="Wali">Wali</option>
                            <option value="Kos">Kos</option>
                            <option value="Asrama">Asrama</option>
                            <option value="Panti Asuhan">Panti Asuhan</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="tranport">Moda Transportasi</label>
                          <select name="transport" class="multisteps-form__input form-control">
                            <option value="Jalan Kaki">Jalan Kaki</option>
                            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                            <option value="Kendaraan Umum">Kendaraan Umum</option>
                            <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                            <option value="Kereta Api">Kereta Api</option>
                            <option value="Ojek">Ojek</option>
                            <option value="Andong">Andong</option>
                            <option value="Perahu Penyebrangan">Perahu Penyebrangan</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="no_hp">Nomor HP</label>
                          <input
                            name="no_hp"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="no_telp">Nomor Telepon</label>
                          <input
                            name="no_telp"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col">
                        <label for="email">Email Pribadi</label>
                          <input
                            name="email"
                            class="multisteps-form__input form-control"
                            type="email"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="kip">Penerima KPS/PKH/KIP</label>
                          <div><input type="radio" name="kip" value="Y">Ya
                          <input type="radio" name="kip" value="T">Tidak</div>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="no_kip">Nomor KPS/PKH/KIP</label>
                          <input
                            name="no_kip"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col">
                        <label for="kwn">Kewarganegaraan</label>
                          <input
                            name="kwn"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button
                          class="btn btn-primary js-btn-prev"
                          type="button"
                          title="Prev"
                        >
                          Prev
                        </button>
                        <button
                          class="btn btn-primary ml-auto js-btn-next"
                          type="button"
                          title="Next"
                        >
                          Next
                        </button>
                      </div>
                    </div>
                  </div>

                  <div
                    class="multisteps-form__panel shadow p-4 rounded bg-white"
                    data-animation="scaleIn"
                  >
                    <h3 class="multisteps-form__title">Data Ayah Kandung</h3>
                    <div class="multisteps-form__content">
                      <div class="row">
                        <div class="col">
                        <label for="nama_ayah">Nama Ayah Kandung </label>
                          <input
                            name="nama_ayah"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                        <div class="col">
                        <label for="thn_ayah">Tahun Lahir </label>
                          <input
                            name="thn_ayah"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="pen_ayah">Pendidikan</label>
                          <select name="pen_ayah" class="multisteps-form__input form-control">
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="Putus SD">Putus SD</option>
                            <option value="SD Sederajat">SD Sederajat</option>
                            <option value="SMP Sederajat">SMP Sederajat</option>
                            <option value="SMA Sederajat">SMA Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4/S1">D4/S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="pekerjaan_ayah">Pekerjaan</label>
                          <select name="pekerjaan_ayah" class="multisteps-form__input form-control">
                          <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                            <option value="Pedagang Besar">Pedagang Besar</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col">
                        <label for="pendapatan_ayah">Penghasilan Bulanan</label>
                          <select name="pendapatan_ayah" class="multisteps-form__input form-control">
                          <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="<500.000">Kurang dari 500.000</option>
                            <option value="500.000-999.999">500.000-999.999</option>
                            <option value="1jt - 1.999.999">1jt - 1.999.999</option>
                            <option value="2jt - 4.999.999">2jt - 4.999.999</option>
                            <option value="5jt - 20jt">5jt - 20jt</option>
                            <option value=">20jt">Lebih dari 20jt</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col">
                        <label for="keb_khusus_ayah">Kebutuhan Khusus</label>
                          <select name="keb_khusus_ayah" class="multisteps-form__input form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Netra">Netra</option>
                            <option value="Rungu">Rungu</option>
                            <option value="Grahita Ringan">Grahita Ringan</option>
                            <option value="Daksa Ringan">Daksa Ringan</option>
                            <option value="Daksa Sedang">Daksa Sedang</option>
                            <option value="Laras">Laras</option>
                            <option value="Wicara">Wicara</option>
                            <option value="Tuna ganda">Tuna ganda</option>
                            <option value="Hiper Aktif">Hiper Aktif</option>
                            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                            <option value="Bakat Istimewa">Bakat Istimewa</option>
                            <option value="Kesulitan Belajar">Kesulitan Khusus</option>
                            <option value="Narkoba">Narkoba</option>
                            <option value="Indigo">Indigo</option>
                            <option value="Down Sindrome">Down Sindrome</option>
                            <option value="Autis">Autis</option>
                          </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="button-row d-flex mt-4 col-12">
                          <button
                            class="btn btn-primary js-btn-prev"
                            type="button"
                            title="Prev"
                          >
                            Prev
                          </button>
                          <button
                            class="btn btn-primary ml-auto js-btn-next"
                            type="button"
                            title="Next"
                          >
                            Next
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="multisteps-form__panel shadow p-4 rounded bg-white"
                    data-animation="scaleIn"
                  >
                    <h3 class="multisteps-form__title">Data Ibu Kandung</h3>
                    <div class="multisteps-form__content">
                    <div class="row">
                        <div class="col">
                        <label for="nama_ibu">Nama Ibu Kandung </label>
                          <input
                            name="nama_ibu"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                        <div class="col">
                        <label for="thn_ibu">Tahun Lahir </label>
                          <input
                            name="thn_ibu"
                            class="multisteps-form__input form-control"
                            type="text"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <label for="pen_ibu">Pendidikan</label>
                          <select name="pen_ibu" class="multisteps-form__input form-control">
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="Putus SD">Putus SD</option>
                            <option value="SD Sederajat">SD Sederajat</option>
                            <option value="SMP Sederajat">SMP Sederajat</option>
                            <option value="SMA Sederajat">SMA Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4/S1">D4/S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <label for="pekerjaan_ibu">Pekerjaan</label>
                          <select name="pekerjaan_ibu" class="multisteps-form__input form-control">
                          <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                            <option value="Pedagang Besar">Pedagang Besar</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col">
                        <label for="pendapatan_ibu">Penghasilan Bulanan</label>
                          <select name="pendapatan_ibu" class="multisteps-form__input form-control">
                          <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="<500.000">Kurang dari 500.000</option>
                            <option value="500.000-999.999">500.000-999.999</option>
                            <option value="1jt - 1.999.999">1jt - 1.999.999</option>
                            <option value="2jt - 4.999.999">2jt - 4.999.999</option>
                            <option value="5jt - 20jt">5jt - 20jt</option>
                            <option value=">20jt">Lebih dari 20jt</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col">
                        <label for="keb_khusus_ibu">Kebutuhan Khusus</label>
                          <select name="keb_khusus_ibu" class="multisteps-form__input form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Netra">Netra</option>
                            <option value="Rungu">Rungu</option>
                            <option value="Grahita Ringan">Grahita Ringan</option>
                            <option value="Daksa Ringan">Daksa Ringan</option>
                            <option value="Daksa Sedang">Daksa Sedang</option>
                            <option value="Laras">Laras</option>
                            <option value="Wicara">Wicara</option>
                            <option value="Tuna ganda">Tuna ganda</option>
                            <option value="Hiper Aktif">Hiper Aktif</option>
                            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                            <option value="Bakat Istimewa">Bakat Istimewa</option>
                            <option value="Kesulitan Belajar">Kesulitan Khusus</option>
                            <option value="Narkoba">Narkoba</option>
                            <option value="Indigo">Indigo</option>
                            <option value="Down Sindrome">Down Sindrome</option>
                            <option value="Autis">Autis</option>
                          </select>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button
                          class="btn btn-primary js-btn-prev"
                          type="button"
                          title="Prev"
                        >
                          Prev
                        </button>
                        <input type="submit" value="Submit">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="function.js"></script>
  </body>
</html>

<?php
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Cek apakah form dikirim
if ($_GET) {
    // Ambil data dari form GET
    $tanggal_pendaftaran = $_GET['tanggalPendaftaran'] ?? date('Y-m-d');
    $jurusan = $_GET['jurusan'] ?? '';
    $ekstrakurikuler = $_GET['ekstrakurikuler'] ?? '';
    $sumber_informasi = $_GET['sumberinformasi'] ?? '';
    $referensi_siswa = $_GET['refensiSiswa'] ?? '';
    $referensi_guru = $_GET['sumberguru'] ?? '';
    $nama_siswa = $_GET['namaSiswa'] ?? '';
    $jenis_kelamin = $_GET['jeniskelamin'] ?? '';
    $nik = $_GET['nik'] ?? '';
    $nomorkartukeluarga = $_GET['nomorKartuKeluarga'];
    $asal_smp = $_GET['asalsmp'] ?? '';
    $noijazah = $_GET['nomorijazah'];
    $noskhun= $_GET['nomorskhun'];
    $noujian = $_GET['nomorujian'];
    $tempat_lahir = $_GET['tempatlahir'] ?? '';
    $tanggal_lahir = $_GET['tanggallahir'] ?? '';
    $agama = $_GET['Agama'];
    $berkebutuhan = $_GET['kebutuhanKhusus'];
    $alamat = $_GET['alamatsiswa'];
    $dusun = $_GET['dusun'];
    $kelurahan = $_GET['kelurahan'];
    $kecamatan = $_GET['kecamatan'];
    $kabupaten = $_GET['kabupaten/kota'];
    $prov = $_GET['provinsi'];
    $nomorhp = $_GET['nomorhp'];
    $email = $_GET['email'];
    $hobi = $_GET['hobi'];
    $citacita = $_GET['cita-cita'];
    $paud = $_GET['paud'];
    

    $nama_ibu = $_GET['namaIbu'] ?? '';
    $nik_ibu = $_GET['nikIbu'] ?? '';
    $pendidikan_ibu = $_GET['pendidikanIbu'] ?? '';
    $pekerjaan_ibu = $_GET['pekerjaanIbu'] ?? '';
    $penghasilan_ibu = $_GET['penghasilanIbu'] ?? '';
    $nomor_hp_ibu = $_GET['noHandphoneIbu'] ?? '';

    $nama_ayah = $_GET['namaayah'] ?? '';
    $nik_ayah = $_GET['nikayah'] ?? '';
    $pendidikan_ayah = $_GET['pendidikanayah'] ?? '';
    $pekerjaan_ayah = $_GET['pekerjaanayah'] ?? '';
    $penghasilan_ayah = $_GET['penghasilanayah'] ?? '';
    $nomor_hp_ayah = $_GET['noHandphoneayah'] ?? '';

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO peserta_didik (
        nomor_pendaftaran, tanggal_pendaftaran, nama_siswa, jurusan, ekstrakurikuler, sumber_informasi,
        referensi_siswa, referensi_guru, jenis_kelamin, nik, nisn, asal_smp, tempat_lahir, tanggal_lahir,
        nama_ibu, nik_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, nomor_hp_ibu,
        nama_ayah, nik_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, nomor_hp_ayah
    ) VALUES (
        '', '$tanggal_pendaftaran', '$nama_siswa', '$jurusan', '$ekstrakurikuler', '$sumber_informasi',
        '$referensi_siswa', '$referensi_guru', '$jenis_kelamin', '$nik', '$nisn', '$asal_smp', '$tempat_lahir', '$tanggal_lahir',
        '$nama_ibu', '$nik_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$nomor_hp_ibu',
        '$nama_ayah', '$nik_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$nomor_hp_ayah'
    )";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        echo "Data pendaftaran berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Tidak ada data yang dikirimkan.";
}

?>
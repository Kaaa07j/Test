<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Identitas Peserta Didik</title>
    <link rel="stylesheet" href="CssPendaftaran.css" />
  </head>
  <body>
    <div class="container">
      <h1>IDENTITAS PESERTA DIDIK*</h1>
      <form method="get" action="Proses.php">
        <label for="nomorPendaftaran" >Nomor Pendaftaran*</label>
        <input
          type="text"
          name="nomorpendaftaran"
          placeholder="Hanya Diisi Oleh Admin"
          readonly
        />

        <label for="tanggalPendaftaran">Tanggal Pendaftaran*</label>
        <input type="date" name="tanggalPendaftaran" required />
        <!-- Jurusan -->
        <label for="jurusan">Jurusan*</label>
        <select name="jurusan">
          <option disabled selected >Pilih Salah Satu Jurusan</option>
          <option value="teknikpermesinan">Teknik Permesinan</option>
          <option value="teknikkendaraan">Teknik Kendaraan Ringan</option>
          <option value="tekniksepeda">Teknik Sepeda Motor</option>
          <option value="teknikkomputer">Teknik Komputer Dan Jaringan</option>
          <option value="teknikrekayasa">Rekayasa Perangkat Lunak</option>
          <option value="teknikdesain">Desain Komunikasi Visual</option>
          <option value="teknikakutansi">Akuntansi</option>
          <option value="teknikmanajemen">Manajemen Perkantoran</option>
        </select>
        <!-- Ekstrakurikuler -->
        <label for="ekstrakurikuler">Ekstrakurikuler*</label>
        <select name="ekstrakurikuler">
          <option disabled selected >Pilih Salah Satu Ekstrakurikuler</option>
          <option value="futsal">Futsal</option>
          <option value="karate">Karate</option>
          <option value="taekwondo">Tae Kwon Do</option>
          <option value="pramuka">Pramuka</option>
          <option value="paskibra">Paskibra</option>
          <option value="marchingband">Marching Band</option>
          <option value="desaingrafis">Desain Grafis</option>
          <option value="fotografi">Fotografi</option>
          <option value="rohani">Rohani Islam</option>
        </select>
        <!-- Sumber Informasi -->
        <label for="sumberInformasi">Sumber Informasi*</label>
        <input type="text" name="sumberinformasi"  placeholder="Sumber Informasi">
        <!--Refrensi Siswa  -->
        <label for="refensiSiswa">Refensi Siswa*</label>
        <input
          type="text"
          name="refensiSiswa"
          placeholder="Isi Dengan Refensi Siswa Jika Ada"
        />
        <!-- Refrensi Guru -->
        <label for="refensiGuru">Refensi Guru*</label>
        <select name="sumberguru">
          <option value="" disable selected>
            Silakan Pilih Refrensi Nama Guru/karyawan Jika Ada
          </option>
          <option value="Doni Ardi Yunus Ndraha, S. Pd, Gr">
            Doni Ardi Yunus Ndraha, S. Pd, Gr
          </option>
          <option value="Ir. Zainuddin">Ir. Zainuddin</option>
          <option value="Mujiono, S. Pd">Mujiono, S. Pd</option>
          <option value="Hardiansah Dermawan, S. Kom, Gr">
            Hardiansah Dermawan, S. Kom, Gr
          </option>
          <option value="Yuyun Agustina, S. Kom">Yuyun Agustina, S. Kom</option>
          <option value="Rima Suhwa Kesuma, S. Pd">
            Rima Suhwa Kesuma, S. Pd
          </option>
          <option value="Aaliya Luthfiah Rauter, S.Pd">
            Aaliya Luthfiah Rauter, S.Pd
          </option>
          <option value="Adelia Suhada Lubis, S.Pd">
            Adelia Suhada Lubis, S.Pd
          </option>
          <option value="Agung Pratama Ramadani, S.Pd">
            Agung Pratama Ramadani, S.Pd
          </option>
          <option value="Ahmad Mardhani Chan, S.Kom">
            Ahmad Mardhani Chan, S.Kom
          </option>
          <option value="Ahmad Soripada Rangkuti, ST">
            Ahmad Soripada Rangkuti, ST
          </option>
          <option value="Aina Fatimah Pulungan, S.Pd">
            Aina Fatimah Pulungan, S.Pd
          </option>
          <option value="Aldatul Amiah Panggabean, S.Pd">
            Aldatul Amiah Panggabean, S.Pd
          </option>
          <option value="Aldi Syaputra, S.Kom">Aldi Syaputra, S.Kom</option>
          <option value="Alvi Purnama Angkasih, S.Kom">
            Alvi Purnama Angkasih, S.Kom
          </option>
          <option value="Amar Dahlina A.R, S.Pd">Amar Dahlina A.R, S.Pd</option>
          <option value="Amita Zahara, S.Pd">Amita Zahara, S.Pd</option>
          <option value="Annisa Putri, S.Pd">Annisa Putri, S.Pd</option>
          <option value="Ariffin, S.Kom">Ariffin, S.Kom</option>
          <option value="Azandi Pratama, S.Pd.I">Azandi Pratama, S.Pd.I</option>
          <option value="Bunga Tanjung Nadeak">Bunga Tanjung Nadeak</option>
          <option value="Dewi Sartika, S.Pd">Dewi Sartika, S.Pd</option>
          <option value="Dhea Annisa Putri Harahap, S.Pd">
            Dhea Annisa Putri Harahap, S.Pd
          </option>
          <option value="Dian Maya Santi, S.Pd">Dian Maya Santi, S.Pd</option>
          <option value="Faisal Azmi, SP">Faisal Azmi, SP</option>
          <option value="Fita Fatria, S.Pd">Fita Fatria, S.Pd</option>
          <option value="Fitrah Hartati, S.Pd">Fitrah Hartati, S.Pd</option>
          <option value="Fitri Fatmasari, S.Pd">Fitri Fatmasari, S.Pd</option>
          <option value="Fitriyani, S.Pd.I">Fitriyani, S.Pd.I</option>
          <option value="Harina Mulia Harahap, S. Pd">
            Harina Mulia Harahap, S. Pd
          </option>
          <option value="Herwinda Satriani, S.Pd">
            Herwinda Satriani, S.Pd
          </option>
          <option value="Irawati Sinaga, S.Pd">Irawati Sinaga, S.Pd</option>
          <option value="Drs. Irwan Herianto Siregar">
            Drs. Irwan Herianto Siregar
          </option>
          <option value="Ismail Marzuki Sianturi, S.Kom">
            Ismail Marzuki Sianturi, S.Kom
          </option>
          <option value="M. Andri Irawan Damanik,ST">
            M. Andri Irawan Damanik,ST
          </option>
          <option value="M. Irfan Nst, ST">M. Irfan Nst, ST</option>
          <option value="Mashul,S.Pd.I">Mashul,S.Pd.I</option>
          <option value="Maulina,S.Pd">Maulina,S.Pd</option>
          <option value="Muhammad Fadly, S.Pd">Muhammad Fadly, S.Pd</option>
          <option value="Muhammad Rizky Fahreza,ST">
            Muhammad Rizky Fahreza,ST
          </option>
          <option value="Mutiara Br Aruan,S.Pd">Mutiara Br Aruan,S.Pd</option>
          <option value="Nila Muliani,S.Pd">Nila Muliani,S.Pd</option>
          <option value="Nuriadi,ST">Nuriadi,ST</option>
          <option value="Octavianty Veby Wulandary,S.Kom">
            Octavianty Veby Wulandary,S.Kom
          </option>
          <option value="Purnomo. S, S.Pd">Purnomo. S, S.Pd</option>
          <option value="Rahmadani, S.Pd">Rahmadani, S.Pd</option>
          <option value="Raudatul Adawiyah, S.Pd">
            Raudatul Adawiyah, S.Pd
          </option>
          <option value="Reza Musthofa Mufthi, S.Kom">
            Reza Musthofa Mufthi, S.Kom
          </option>
          <option value="Ria Santika, S.Kom">Ria Santika, S.Kom</option>
          <option value="Rindiani, S.Pd">Rindiani, S.Pd</option>
          <option value="Riska Wahyuni, S.Pd">Riska Wahyuni, S.Pd</option>
          <option value="Rivaldi Caniago, ST">Rivaldi Caniago, ST</option>
          <option value="Roni Suganda, S.Pd">Roni Suganda, S.Pd</option>
          <option value="Rudi Hermanto, S.Pd">Rudi Hermanto, S.Pd</option>
          <option value="Rudi Sanjaya, S. Pd">Rudi Sanjaya, S. Pd</option>
          <option value="Nindi Dewi Orizasyatifa, S.Pd">
            Nindi Dewi Orizasyatifa, S.Pd
          </option>
          <option value="Siti Khodijah, S.Pd.I">Siti Khodijah, S.Pd.I</option>
          <option value="Sri Devi Hariza, M.Pd">Sri Devi Hariza, M.Pd</option>
          <option value="Sugianti, S. Pd">Sugianti, S. Pd</option>
          <option value="T. Dian Ayuni, S.Kom">T. Dian Ayuni, S.Kom</option>
          <option value="Zulfakar, ST">Zulfakar, ST</option>
          <option value="Farida Amela, MM">Farida Amela, MM</option>
          <option value="Lyly Rismaidy, S. Pd">Lyly Rismaidy, S. Pd</option>
          <option value="Zulham Anwar Nasution, S. Pd. I">
            Zulham Anwar Nasution, S. Pd. I
          </option>
          <option value="Rika Mistika, SE">Rika Mistika, SE</option>
          <option value="Sofrida">Sofrida</option>
          <option value="Rahmah Hastiyanti, S. Pd">
            Rahmah Hastiyanti, S. Pd
          </option>
          <option value="Nuraini Nasution">Nuraini Nasution</option>
          <option value="Pebria Jannah, A. Md">Pebria Jannah, A. Md</option>
          <option value="Era Sukanti, SE">Era Sukanti, SE</option>
          <option value="Suci Lestari, S. Sos">Suci Lestari, S. Sos</option>
          <option value="Budi Hardiansyah, S. Kom">
            Budi Hardiansyah, S. Kom
          </option>
          <option value="Kharisma Agung">Kharisma Agung</option>
          <option value="Junaidi ">Junaidi</option>
          <option value="Badrun">Badrun</option>
          <option value="Muhammad Rizqy Aditya Fahrezi, S.Ds">
            Muhammad Rizqy Aditya Fahrezi, S.Ds
          </option>
          <option value="Yuni Fadilla Sari, S. Psi">
            Yuni Fadilla Sari, S. Psi
          </option>
          <option value="Zulhadi, A. Md">Zulhadi, A. Md</option>
          <option value="Dede Utomo">Dede Utomo</option>
          <option value="Harry Armada, A. Md">Harry Armada, A. Md</option>
          <option value="Asep Rachmat Hidayat">Asep Rachmat Hidayat</option>
          <option value="Ivan Alfaridzi Yonasty">Ivan Alfaridzi Yonasty</option>
          <option value="Nur Fadillah">Nur Fadillah</option>
          <option value="Fitri Nuraini">Fitri Nuraini</option>
          <option value="Efrizal Fadhilah Saragih">
            Efrizal Fadhilah Saragih
          </option>
          <option value="Bambang Gunawan Ritonga, S. Pd. I">
            Bambang Gunawan Ritonga, S. Pd. I
          </option>
          <option value="Amelia Chantika Fati ah">
            Amelia Chantika Fati ah
          </option>
          <option value="Endi Nainggolan, S.Pd">Endi Nainggolan, S.Pd</option>
          <option value="Iman Supriadi, S.Psi">Iman Supriadi, S.Psi</option>
          <option value="Sahbanta Mulia Sembiring, ST, Gr">
            Sahbanta Mulia Sembiring, ST, Gr
          </option>
          <option value="Harry Aswadi">Harry Aswadi</option>
          <option value="Ahmad Muliadi Matondang, S.Pd">
            Ahmad Muliadi Matondang, S.Pd
          </option>
          <option value="Fareel Haqqii Kyedasyumoko">
            Fareel Haqqii Kyedasyumoko
          </option>
          <option value="Rizki Ayunan, S.Pd">Rizki Ayunan, S.Pd</option>
          <option value="Revan ED, SH">Revan ED, SH</option>
        </select>

        </select>
        <!-- NamaSiswa -->
        <label for="namaSiswa">Nama Siswa*</label>
        <input type="text" name="namaSiswa" placeholder="NamaSiswa" required />
        <!-- JenisKelamin -->
        <label for="jeniskelamin">Jenis Kelamin*</label>
        <select name="jeniskelamin">
          <option disabled selected>Pilih Jenis Kelamin*</option>
          <option value="lakilaki">Laki-Laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
        <!-- NIK -->
        <label for="nik">NIK*</label>
        <input type="number" name="nik" placeholder="NIK Siswa" required />
        <!-- NomorKartuKeluarga -->
        <label for="nomorKartuKeluarga">Nomor Kartu Keluarga*</label>
        <input
          type="number"
          name="nomorKartuKeluarga"
          placeholder="Nomor Kartu Keluarga"
          required
        />
        <!-- AsalSMP -->
        <label for="Asalsmp">Asal SMP*</label>
        <input type="text" name="asalsmp" placeholder="Asal SMP" required />
        <!-- NomorIjazah -->
        <label for="nomorijazah">Nomor Ijazah*</label>
        <input
          type="text"
          name="nomorijazah"
          placeholder="Nomor Ijazah"
          required
        />
        <!-- Nomor SKHUN -->
        <label for="nomorskhun">Nomor SKHUN*</label>
        <input
          type="text"
          name="nomorskhun"
          placeholder="Nomor SKHUN"
          required
        />
        <!-- Nomor Ujian Nasional -->
        <label for="nomorujian">Nomor Ujian Nasional SMP*</label>
        <input
          type="text"
          name="nomorujian"
          placeholder="Nomor Ujian Nasional SMP"
          required
        />
        <!-- TempatLahir -->
        <label for="Tempatlahit">Tempat Lahir*</label>
        <input
          type="text"
          name="tempatlahir"
          placeholder="Tempat Lahir"
          required
        />
        <!-- TanggalLahir -->
        <label for="Tanggallahir">Tanggal Lahir*</label>
        <input
          type="date"
          name="tanggallahir"
          placeholder="Tanggal Lahir"
          required
        />
        <!-- Agama -->
        <label for="agama">Agama*</label>
        <select name="Agama">
          <option disabled selected>Pilih Salah Satu Agama</option>
          <option value="">Islam</option>
          <option value="">Kristen Katolik</option>
          <option value="">Kristen Protestan</option>
          <option value="">Hindu</option>
          <option value="">Budha</option>
          <option value="">Konghucu</option>
        </select>
        <!-- Berkebutuhan Khusus -->
        <label for="kebutuhanKhusus">Berkebutuhan Khusus*</label>
        <textarea
          name="kebutuhanKhusus"
          class="textarea"
          rows="4"
          placeholder="Berkebutuhan Khusus"
          style="
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
          "
        ></textarea>
        <!-- AlamatSiswa -->
        <label for="alamatsiswa">Alamat Siswa*</label>
        <input
          type="text"
          name="alamatsiswa"
          placeholder="Alamat Siswa"
          required
        />
        <!-- Dusun -->
        <label for="dusun">Dusun*</label>
        <input type="text" name="dusun" placeholder="Dusun" required />
        <!-- Kelurahan -->
        <label for="kelurahan">Kelurahan*</label>
        <input type="text" name="kelurahan" placeholder="Kelurahan" required />
        <!-- Kecamatan -->
        <label for="kecamatan">Kecamatan*</label>
        <input type="text" name="kecamatan" placeholder="Kecamatan" required />
        <!-- Kabupaten/Kota -->
        <label for="kabupaten/kota">Kabupaten/Kota*</label>
        <input
          type="text"
          name="kabupaten/kota"
          placeholder="Kabupaten/Kota"
          required
        />
        <!-- Provinsi -->
        <label for="provinsi">Provinsi*</label>
        <input type="text" name="provinsi" placeholder="Provinsi" required />
        <!-- No Handphone -->
        <label for="nohp">No Handphone*</label>
        <input
          type="text"
          name="nohp"
          placeholder="No Handphone Siswa"
          required
        />
        <!-- Email -->
        <label for="email">E-mail Siswa*</label>
        <input
          type="text"
          name="email"
          placeholder="email@email.com"
          required
        />
        <!-- Hobi -->
        <label for="hobi">Hobi*</label>
        <input type="text" name="hobi" placeholder="Hobi" required />
        <!-- Cita-Cita -->
        <label for="cita-cita">Cita-Cita Siswa*</label>
        <input type="text" name="cita-cita" placeholder="Cita-Cita" required />
        <!-- Paud/TK -->
        <label for="paud">Pernah Menempuh Pendidikan di PAUD/TK*</label>
        <select name="paud">
          <option>Pernah</option>
          <option>Tidak Pernah</option>
        </select>

        <!-- Data Ibu -->
        <div class="head ibu">
          <h1>DATA IBU KANDUNG*</h1>
          <label for="namaIbu">Nama Ibu Kandung*</label>
          <input
            type="text"
            name="namaIbu"
            placeholder="Nama ibu Kandung"
            required
          />
        <!-- Nikibu -->
          <label for="nikIbu">NIK Ibu Kandung*</label>
          <input
            type="number"
            name="nikIbu"
            placeholder="NIK ibu Kandung"
            required
          />
          <!-- PendidikanIbu -->
          <label for="pendidikanIbu">Pendidikan Ibu*</label>
          <select name="pendidikanIbu" required>
            <option value="" disabled selected>Pilih Salah Satu</option>
            <option value="sd">SD</option>
            <option value="smp">SMP</option>
            <option value="sma">SMA</option>
            <option value="s1">S1</option>
            <option value="s2">S2</option>
            <option value="s2">S3</option>
          </select>
        <!-- PekerjaanIbu -->
          <label for="pekerjaanIbu">Pekerjaan Ibu*</label>
          <input type="text" name="pekerjaanIbu" placeholder="Pekerjaan Ibu" required
          />
        <!-- PenghasilanIbu -->
          <label for="penghasilanIbu">Penghasilan Ibu*</label>
          <input type="number" e="penghasilanIbu" placeholder="Penghasilan Ibu" required
          />
        <!-- NomorHandponeIbu -->
          <label for="noHandphoneIbu">Nomor Handphone Ibu*</label>
          <input type="number" name="noHandphoneIbu" placeholder="Nomor Handphone Ibu"  required/>
        </div>

        <!-- Data ayah -->
        <div class="head ayah">
          <h1>DATA AYAH KANDUNG*</h1>
          <label for="namaayah">Nama ayah Kandung*</label>
          <input
            type="text"
            name="namaayah"
            placeholder="Nama ayah Kandung"
            required
          />
        <!-- Nikayah -->
          <label for="nikayah">NIK ayah Kandung*</label>
          <input
            type="number"
            name="nikayah"
            placeholder="NIK ayah Kandung"
            required
          />
          <!-- Pendidikanayah -->
          <label for="pendidikanayah">Pendidikan ayah*</label>
          <select name="pendidikanayah" required>
            <option value="" disabled selected>Pilih Salah Satu</option>
            <option value="sd">SD</option>
            <option value="smp">SMP</option>
            <option value="sma">SMA</option>
            <option value="s1">S1</option>
            <option value="s2">S2</option>
            <option value="s2">S3</option>
          </select>
        <!-- Pekerjaanayah -->
          <label for="pekerjaanayah">Pekerjaan ayah*</label>
          <input type="text" name="pekerjaanayah" placeholder="Pekerjaan ayah" required
          />
        <!-- Penghasilanayah -->
          <label for="penghasilanayah">Penghasilan ayah*</label>
          <input type="number" e="penghasilanayah" placeholder="Penghasilan ayah" required
          />
        <!-- NomorHandponeayah -->
          <label for="noHandphoneayah">Nomor Handphone ayah*</label>
          <input type="number" name="noHandphoneayah" placeholder="Nomor Handphone ayah"  required/>
        </div>
        <div class="button">
        <button type="submit" class="Daftar">Kirim</button>
        <button type="reset" class="Reset">Batal</button>
        </div>
      </form>
    </div>
  </body>
</html>

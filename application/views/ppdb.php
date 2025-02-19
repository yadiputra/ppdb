<div class="container-fluid grey">
<div class="container space-y-5 py-5 px-4">
  <h2 class="py-5 text-title text-2xl font-bold font-heading">Formulir Penerimaan Peserta Didik Baru Tahun 2025/2026</h2>
    
  <form action="" class="space-y-3">
    <h6 class="lg:text-xl text-lg font-bold font-heading mb-3">Registrasi Peserta Didik</h6>
    <div class="flex_in">
      <label for="is_transfer" class="col-md-4 pt-1">Jenis Pendaftaran <span style="color: red">*</span></label>
      <div class="col-md-8">
        <select name="is_transfer" class="form-select w-full" id="is_transfer">
		<option value="" selected="selected">Pilih :</option>
		<option value="false">Baru</option>
		<option value="true">Pindahan</option>
		</select>
      </div>
    </div>

    <div class="flex_in flex-col lg:flex-row">
      <label for="admission_type_id" class="col-md-4 pt-1">Jenjang Yang Dituju <span style="color: red">*</span></label>
      <div class="col-md-8">
        <select name="admission_type_id" class="form-select w-full" id="admission_type_id">
		<option value="" selected="selected">Pilih :</option>
		<option value="171">MA Ma'arif NU</option>
		<option value="170">MTS Ma'arif NU</option>
		<option value="170">Hanya Pondok</option>
		</select>
      </div>
    </div>

    <!-- Khusus SMA/SMK/PT -->
    
    <!-- Khusus SMP/Sederajat dan SMA/Sederajat -->
          <div class="flex_in flex-col lg:flex-row">
        <label for="prev_school_name" class="col-md-4 pt-1">Nama Sekolah Asal <span style="color: red">*</span></label>
        <div class="col-md-8">
          <input type="text" value="" class="form-input w-full" id="prev_school_name" name="prev_school_name">
        </div>
      </div>
      <div class="flex_in flex-col lg:flex-row">
        <label for="prev_school_address" class="col-md-4 pt-1">Alamat Sekolah Asal <span style="color: red">*</span></label>
        <div class="col-md-8">
          <textarea rows="2" name="prev_school_address" id="prev_school_address" class="form-textarea pt-1 w-full"></textarea>
        </div>
      </div>
        <div class="flex_in flex-col lg:flex-row">
      <label for="hobby" class="col-md-4 pt-1">Hobi <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="hobby" name="hobby">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="ambition" class="col-md-4 pt-1">Cita-Cita <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="ambition" name="ambition">
      </div>
    </div>

    <!-- Biodata -->
    <h6 class="lg:text-xl text-lg font-bold font-heading mb-3">Data Calon Peserta Didik</h6>
    <div class="flex_in flex-col lg:flex-row">
      <label for="full_name" class="col-md-4 pt-1">Nama Lengkap <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="full_name" name="full_name">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="gender" class="col-md-4 pt-1">Jenis Kelamin <span style="color: red">*</span></label>
      <div class="col-md-8">
        <select name="gender" class="form-select w-full" id="gender">
		<option value="" selected="selected">Pilih :</option>
		<option value="M">Laki-laki</option>
		<option value="F">Perempuan</option>
		</select>
      </div>
    </div>

    <!-- Khusus SMP/Sederajat, SMA/Sederajat -->
          <div class="flex_in flex-col lg:flex-row">
        <label for="nisn" class="col-md-4 pt-1">NISN <span style="color: red">*</span></label>
        <div class="col-md-8">
          <input type="text" value="" class="form-input w-full" id="nisn" name="nisn" placeholder="Nomor Induk Siswa Nasional 10 digit">
        </div>
      </div>
    
    <!-- Khusus Selain SD -->
          <div class="flex_in flex-col lg:flex-row">
        <label for="nik" class="col-md-4 pt-1">NIK <span style="color: red">*</span></label>
        <div class="col-md-8">
          <input type="text" value="" class="form-input w-full" id="nik" name="nik" placeholder="Nomor Induk Kependudukan 16 digit">
        </div>
      </div>
    
    <div class="flex_in flex-col lg:flex-row">
      <label for="kks" class="col-md-4 pt-1">No. Kartu Keluarga <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="kks" name="kks" placeholder="No. Kartu Keluarga 16 digit">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="sktm" class="col-md-4 pt-1">Anak ke <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="sktm" name="sktm" placeholder="Anak keberapa berdasarkan KK">
      </div>
    </div>

    <div class="flex_in flex-col lg:flex-row">
      <label for="birth_place" class="col-md-4 pt-1">Tempat Lahir <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="birth_place" name="birth_place">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="birth_date" class="col-md-4 pt-1">Tanggal Lahir <span style="color: red">*</span></label>
      <div class="col-md-8">
        <div class="relative">
          <input type="date" readonly="" class="form-input w-full date" id="birth_date" name="birth_date" data-toggle="datepicker">
        </div>
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="religion_id" class="col-md-4 pt-1">Agama <span style="color: red">*</span></label>
      <div class="col-md-8">
        <select name="religion_id" class="form-select w-full" id="religion_id">
		<option value="" selected="selected">Pilih :</option>
		<option value="89">Islam</option>
		<option value="95">Lainnya</option>
		</select>
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="residence_id" class="col-md-4 pt-1">Tempat Tinggal <span style="color: red">*</span></label>
      <div class="col-md-8">
        <select name="residence_id" class="form-input w-full" id="residence_id">
		<option value="" selected="selected">Pilih :</option>
		<option value="77">Asrama</option>
		<option value="74">Bersama orang tua</option>
		<option value="79">Lainnya</option>
		</select>
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="mobile_phone" class="col-md-4 pt-1">Nomor HP/WA Orang Tua <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="mobile_phone" name="mobile_phone" placeholder="Contoh: 0812-9884-5227">
      </div>
    </div>
    <!-- Ayah -->
    <h6 class="lg:text-xl text-lg font-bold font-heading mb-3">Data Ayah Kandung</h6>
    <div class="flex_in flex-col lg:flex-row">
      <label for="father_name" class="col-md-4 pt-1">Nama Ayah Kandung <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="father_name" name="father_name">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="father_employment_id" class="col-md-4 pt-1">Pekerjaan <span style="color: red">*</span></label>
      <div class="col-md-8">
        <select name="father_employment_id" class="form-select w-full" id="father_employment_id">
		<option value="" selected="selected">Pilih :</option>
		<option value="20">Buruh</option>
		<option value="176">Guru Honor</option>
		<option value="178">Ibu Rumah Tangga</option>
		<option value="177">Karyawan BUMN</option>
		<option value="15">Karyawan Swasta</option>
		<option value="22">Lain-lain</option>
		<option value="11">Nelayan</option>
		<option value="17">Pedagang Besar</option>
		<option value="16">Pedagang Kecil</option>
		<option value="21">Pensiunan</option>
		<option value="12">Petani</option>
		<option value="13">Peternak</option>
		<option value="14">PNS</option>
		<option value="175">POLRI</option>
		<option value="180">Sudah Meninggal</option>
		<option value="10">Tidak bekerja</option>
		<option value="174">TNI</option>
		<option value="18">Wiraswasta</option>
		<option value="19">Wirausaha</option>
		</select>
      </div>
    </div>
    <!-- Ibu -->
    <h6 class="lg:text-xl text-lg font-bold font-heading mb-3">Data Ibu Kandung</h6>
    <div class="flex_in flex-col lg:flex-row">
      <label for="mother_name" class="col-md-4 pt-1">Nama Ibu Kandung <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="mother_name" name="mother_name">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="mother_employment_id" class="col-md-4 pt-1">Pekerjaan <span style="color: red">*</span></label>
      <div class="col-md-8">
        <select name="mother_employment_id" class="form-select w-full" id="mother_employment_id">
		<option value="" selected="selected">Pilih :</option>
		<option value="20">Buruh</option>
		<option value="176">Guru Honor</option>
		<option value="178">Ibu Rumah Tangga</option>
		<option value="177">Karyawan BUMN</option>
		<option value="15">Karyawan Swasta</option>
		<option value="22">Lain-lain</option>
		<option value="11">Nelayan</option>
		<option value="17">Pedagang Besar</option>
		<option value="16">Pedagang Kecil</option>
		<option value="21">Pensiunan</option>
		<option value="12">Petani</option>
		<option value="13">Peternak</option>
		<option value="14">PNS</option>
		<option value="175">POLRI</option>
		<option value="180">Sudah Meninggal</option>
		<option value="10">Tidak bekerja</option>
		<option value="174">TNI</option>
		<option value="18">Wiraswasta</option>
		<option value="19">Wirausaha</option>
		</select>
      </div>
    </div>
	<div class="flex_in flex-col lg:flex-row">
      <label for="sub_village" class="col-md-4 pt-1">Provinsi <span style="color: red">*</span></label>
      <div class="col-md-8">
        <select name="provinsi" class="form-select w-full" id="provinsi">
		<option value="" selected="selected">Pilih :</option>
		<?php foreach ($prov as $provinsi){
		echo "
		<option value=''>".$provinsi['nama_provinsi']."</option>
		";
		}?>
		</select>
      </div>
    </div>
	<div class="flex_in flex-col lg:flex-row">
      <label for="district" class="col-md-4 pt-1">Kota/Kabupaten <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="district" name="district">
      </div>
    </div>
	<div class="flex_in flex-col lg:flex-row">
      <label for="sub_district" class="col-md-4 pt-1">Kecamatan <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="sub_district" name="sub_district">
      </div>
    </div>
	<div class="flex_in flex-col lg:flex-row">
      <label for="village" class="col-md-4 pt-1">Kelurahan/Desa <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="village" name="village">
      </div>
    </div>
	 <div class="flex_in flex-col lg:flex-row">
      <label for="street_address" class="col-md-4 pt-1">Alamat Jalan <span style="color: red">*</span></label>
      <div class="col-md-8">
        <textarea rows="2" name="street_address" id="street_address" class="form-textarea pt-1 w-full"></textarea>
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="postal_code" class="col-md-4 pt-1">Kode Pos <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="postal_code" name="postal_code">
      </div>
    </div>
    <!-- Wali -->
    <h6 class="lg:text-xl text-lg font-bold font-heading mb-3">Data Wali</h6>
    <div class="flex_in flex-col lg:flex-row">
      <label for="guardian_name" class="col-md-4 pt-1">Nama Wali <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="guardian_name" name="guardian_name">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="guardian_employment_id" class="col-md-4 pt-1">Pekerjaan <span style="color: red">*</span></label>
      <div class="col-md-8">
        <select name="guardian_employment_id" class="form-select w-full" id="guardian_employment_id">
		<option value="" selected="selected">Pilih :</option>
		<option value="20">Buruh</option>
		<option value="176">Guru Honor</option>
		<option value="178">Ibu Rumah Tangga</option>
		<option value="177">Karyawan BUMN</option>
		<option value="15">Karyawan Swasta</option>
		<option value="22">Lain-lain</option>
		<option value="11">Nelayan</option>
		<option value="17">Pedagang Besar</option>
		<option value="16">Pedagang Kecil</option>
		<option value="21">Pensiunan</option>
		<option value="12">Petani</option>
		<option value="13">Peternak</option>
		<option value="14">PNS</option>
		<option value="175">POLRI</option>
		<option value="180">Sudah Meninggal</option>
		<option value="10">Tidak bekerja</option>
		<option value="174">TNI</option>
		<option value="18">Wiraswasta</option>
		<option value="19">Wirausaha</option>
		</select>
      </div>
    </div>

    <!-- Data Periodik -->
    <h6 class="lg:text-xl text-lg font-bold font-heading mb-3">Data Periodik</h6>
    <div class="flex_in flex-col lg:flex-row">
      <label for="height" class="col-md-4 pt-1">Tinggi Badan (Cm) <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="number" value="" class="form-input w-full" id="height" name="height">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="weight" class="col-md-4 pt-1">Berat Badan (Kg) <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="number" value="" class="form-input w-full" id="weight" name="weight">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="mileage" class="col-md-4 pt-1">Jarak Tempat Tinggal ke Sekolah (Km) <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="text" value="" class="form-input w-full" id="mileage" name="mileage">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="traveling_time" class="col-md-4 pt-1">Waktu Tempuh ke Sekolah (Menit) <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="number" value="" class="form-input w-full" id="traveling_time" name="traveling_time">
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row">
      <label for="sibling_number" class="col-md-4 pt-1">Jumlah Saudara Kandung <span style="color: red">*</span></label>
      <div class="col-md-8">
        <input type="number" value="" class="form-input w-full" id="sibling_number" name="sibling_number">
      </div>
    </div>

    <h6 class="lg:text-xl text-lg font-bold font-heading mb-3">Pernyataan dan Keamanan</h6>
    <div class="flex_in flex-col lg:flex-row">
      <label for="declaration" class="col-md-4 pt-1">Pernyataan <span style="color: red">*</span></label>
      <div class="col-md-8">
        <div class="form-check">
          <input class="mr-2" type="checkbox" name="declaration" id="declaration">
          <label class="form-check-label" for="declaration">
            Saya menyatakan dengan sesungguhnya bahwa isian data dalam formulir ini adalah benar. Apabila ternyata data tersebut tidak benar / palsu, maka saya bersedia menerima sanksi sesuai ketentuan yang berlaku di <b>Pondok Pesantren Darussalamah Musi Rawas</b>
          </label>
        </div>
      </div>
    </div>
    <div class="flex_in flex-col lg:flex-row pt-3">
      <span class="col-md-4"></span>
      <button type="button" class="bg-ponpes text-white rounded py-2 px-5"><i class="fa fa-book mr-2"></i> DAFTAR</button>
    </div>
  </form>            
</div>
</div>
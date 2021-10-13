<div class="col bg-white mr-1 colSatu">
    @csrf

    <h3>Identitas Pemohon</h3>

    <input autocomplete="off" class="form-control mb-3 @error('nokk')is-invalid @enderror" type="text" placeholder="Nomor Kartu Keluarga" id="nokk" name="nokk" value="{{ old('nokk') }}">

            <input autocomplete="off" class="form-control mb-3 @error('nik')is-invalid @enderror" type="text" placeholder="Nomor Induk Kependudukan" id="nik" name="nik" value="{{ old('nik') }}">

            <input autocomplete="off" class="form-control mb-3 @error('nama')is-invalid @enderror" 
            type="text" placeholder="Nama" id="nama" name="nama" value="{{ old('nama') }}">

            <select id="jenisKelamin" class=" mb-3 form-control @error('jenisKelamin')is-invalid @enderror" name="jenisKelamin" value="{{ old("jenisKelamin") }}">
                <option value="" class="text-muted">Jenis Kelamin</option>
                <option value="Laki - laki"   {{ (old("jenisKelamin") == "Laki - laki" ? "selected" : "") }}   >Laki - laki</option>
                <option value="Perempuan" {{ (old("jenisKelamin") == "Perempuan" ? "selected" : "") }} >Perempuan</option>
              </select>

            <div class="row">
                <div class="col-6">
                    <input autocomplete="off" class="form-control mb-3 @error('tempatLahir')is-invalid @enderror" type="text" placeholder="Tempat Lahir" id="tempatLahir" name="tempatLahir" value="{{ old('tempatLahir') }}">
                </div>

                <div class="col">
                    <input autocomplete="off" class="form-control mb-3 @error('tanggalLahir')is-invalid @enderror" type="date" placeholder="Tanggal Lahir" id="tanggalLahir" name="tanggalLahir" value="{{ old('tanggalLahir') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <input autocomplete="off" class="form-control mb-3 @error('alamat')is-invalid @enderror" type="text" placeholder="Alamat" id="alamat" name="alamat" value="{{ old('alamat') }}">
                </div>

                <div class="col">
                    <input autocomplete="off" class="form-control mb-3 @error('rt')is-invalid @enderror" type="text" placeholder="RT" id="rt" name="rt" value="{{ old('rt') }}">
                </div>

                <div class="col">
                    <input autocomplete="off" class="form-control mb-3 @error('rw')is-invalid @enderror" type="text" placeholder="RW" id="rw" name="rw" value="{{ old('rw') }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <select id="agama" class="form-control @error('agama')is-invalid @enderror" name="agama" value="{{ old("agama") }}">
                        <option value="" class="text-muted">Agama</option>
                        <option value="Islam"   {{ (old("agama") == "Islam" ? "selected" : "") }}   >Islam</option>
                        <option value="Kristen" {{ (old("agama") == "Kristen" ? "selected" : "") }} >Kristen</option>
                        <option value="Hindu"   {{ (old("agama") == "Hindu" ? "selected" : "") }}   >Hindu</option>
                        <option value="Budha"   {{ (old("agama") == "Budha" ? "selected" : "") }}   >Budha</option>
                      </select>
                </div>
                <div class="col">
                    <select id="golonganDarah" class="form-control @error('golonganDarah')is-invalid @enderror" name="golonganDarah" value="{{ old("golonganDarah") }}">
                        <option value="" class="text-muted">Golongan Darah</option>
                        <option value="A"   {{ (old("golonganDarah") == "A" ? "selected" : "") }}   >A</option>
                        <option value="AB" {{ (old("golonganDarah") == "AB" ? "selected" : "") }} >AB</option>
                        <option value="B"   {{ (old("golonganDarah") == "B" ? "selected" : "") }}   >B</option>
                        <option value="O"   {{ (old("golonganDarah") == "O" ? "selected" : "") }}   >O</option>
                      </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                        <select id="statusPerkawinan" class="form-control @error('statusPerkawinan')is-invalid @enderror" name="statusPerkawinan" value="{{ old("statusPerkawinan") }}">
                          <option value="" class="text-muted">Status Perkawinan</option>
                          <option value="Kawin"         {{ (old("statusPerkawinan") == "Kawin" ? "selected" : "") }}        >Kawin</option>
                          <option value="Belum Kawin"   {{ (old("statusPerkawinan") == "Belum Kawin" ? "selected" : "") }}  >Belum Kawin</option>
                          <option value="Cerai Mati"    {{ (old("statusPerkawinan") == "Cerai Mati" ? "selected" : "") }}   >Cerai Mati</option>
                          <option value="Cerai Hidup"   {{ (old("statusPerkawinan") == "Cerai Hidup" ? "selected" : "") }}  >Cerai Hidup</option>
                        </select>
                </div>
                <div class="col">
                    <select id="statusKeluarga" class="form-control @error('statusKeluarga')is-invalid @enderror" name="statusKeluarga" value="{{ old("statusKeluarga") }}">
                        <option value="" class="text-muted">Status Keluarga</option>
                        <option value="Kepala Keluarga"         {{ (old("statusKeluarga") == "Kepala Keluarga" ? "selected" : "") }}        >Kepala Keluarga</option>
                        <option value="Anggota"   {{ (old("statusKeluarga") == "Anggota" ? "selected" : "") }}  >Anggota</option>
                      </select>
                </div>
            </div>

            <input autocomplete="off" class="form-control mb-3 @error('pekerjaan')is-invalid @enderror" type="text" placeholder="Pekerjaan" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}">

            <input autocomplete="off" class="form-control @error('kewarganegaraan')is-invalid @enderror" type="text" placeholder="Kewarganegaraan" id="kewarganegaraan" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}">

</div>
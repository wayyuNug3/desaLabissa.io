<div class="col bg-white mr-1 colSatu">
    <h3>Identitas Pemohon</h3>
    <input type="text" id="id" name="penduduk_id" hidden>
    <div class="input-group">
            <div class="input-group-prepend">
                <button class="btn btn-secondary" type="button" id="tCariPenduduk"  data-toggle="modal" data-target="#modal">Cari</button>
            </div>
            <input type="text" class="keywordCariPenduduk form-control" placeholder="Cari Penduduk...." aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>

        {{-- alihkan ke pembuatan surat domisili jika penduduk bukan warga asli --}}
        <small class="text-muted">Jika pemohon bukan merupakan penduduk asli silahkan <a href="/suratKeteranganDomisili" class="">Buat Surat Domisili</a></small>

        {{-- nik --}}
        <div class="form-group">
            <label class=" my-0 "for="nik">Nomor Induk Kependudukan</label>
            <input readonly autocomplete="off" type="text" class="form-control @error('nik') is-nvalid @enderror" id="nik" name="nik" value="{{ old('nik') }}">
            @error('nik')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
            @enderror
        </div>
        {{-- nama --}}
        <div class="form-group">
            <label class=" my-0 "for="nama">Nama Pemohon</label>
            <input readonly autocomplete="off" type="text" class="form-control @error('nama') is-nvalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
            @enderror
        </div>
        {{-- jeniKelamin --}}
        <div class="form-group">
            <label class=" my-0 "for="jeniKelamin">Jenis Kelamin</label>
            <input readonly autocomplete="off" type="text" class="form-control @error('jeniKelamin') is-nvalid @enderror" id="jenisKelamin" name="jeniKelamin" value="{{ old('jeniKelamin') }}">
            @error('jeniKelamin')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
            @enderror
        </div>

        {{-- tempatDanTanggalLahir --}}
        <div class="form-group">
            <label class=" my-0 "for="tempatDanTanggalLahir">Tempat dan Tanggal Lahir</label>
            <input readonly autocomplete="off" type="text" class="form-control @error('tempatDanTanggalLahir') is-nvalid @enderror" id="tempatDanTanggalLahir" name="tempatDanTanggalLahir" value="{{ old('tempatLahir') }}">
            @error('tempatLahir')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
            @enderror
        </div>

        {{-- alamat --}}
        <div class="form-group">
            <label class=" my-0 "for="alamat">Alamat</label>
            <input readonly autocomplete="off" type="text" class="form-control @error('alamat') is-nvalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
            @error('alamat')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
            @enderror
        </div>
        

        <div class="row">
            <div class="col">
                {{-- agama --}}
                <div class="form-group">
                    <label class=" my-0 "for="agama">Agama</label>
                    <input readonly autocomplete="off" type="text" class="form-control @error('agama') is-nvalid @enderror" id="agama" name="agama" value="{{ old('agama') }}">
                    @error('agama')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                    @enderror
                </div>
            </div>
            <div class="col">
                {{-- pekerjaan --}}
                <div class="form-group">
                    <label class=" my-0 "for="pekerjaan">Pekerjaan</label>
                    <input readonly autocomplete="off" type="text" class="form-control @error('pekerjaan') is-nvalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}">
                    @error('pekerjaan')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                    @enderror
                </div>
            </div>
        </div>
</div>
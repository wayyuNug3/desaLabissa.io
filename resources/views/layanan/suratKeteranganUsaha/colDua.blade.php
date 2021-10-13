<div class="col bg-white mr-1 colDua">
    <h3>Surat</h3>
		@csrf
		<input hidden type="text" id="surat_id" name="surat_id" >
		<input hidden type="text" id="id" name="penduduk_id" >
		{{-- noSurat --}}
		<div class="form-group">
				<label class=" my-0 "for="noSurat">No Surat</label>
				<input readonly autocomplete="off" type="text" class="form-control @error('noSurat') is-nvalid @enderror" id="noSurat" name="noSurat" value="{{ $noSurat }}">
				@error('noSurat')
						<div class="invalid-feedback">
								{{ $message }}
						</div>
				@enderror
		</div>
		{{-- jenisUsaha --}}
		<div class="form-group">
				<label class=" my-0 "for="jenisUsaha">Jenis Usaha</label>
				<input autocomplete="off" type="text" class="form-control @error('jenisUsaha') is-nvalid @enderror" id="jenisUsaha" name="jenisUsaha" value="{{ old('jenisUsaha') }}">
				@error('jenisUsaha')
						<div class="invalid-feedback">
								{{ $message }}
						</div>
				@enderror
		</div>
		{{-- alamatUsaha --}}
		<div class="form-group">
				<label class=" my-0 "for="alamatUsaha">Alamat Usaha</label>
				<input autocomplete="off" type="text" class="form-control @error('alamatUsaha') is-nvalid @enderror" id="alamatUsaha" name="alamatUsaha" value="{{ old('alamatUsaha') }}">
				@error('alamatUsaha')
						<div class="invalid-feedback">
								{{ $message }}
						</div>
				@enderror
		</div>
		{{-- aparat_id --}}
		<div class="form-group">
			<label class=" my-0 "for="aparat_id">Pejabat</label>
			<select id="aparat_id" class="form-control @error('aparat_id') is-nvalid @enderror" name="aparat_id" value="{{ old('aparat_id') }}">
					<option value="Supratman, S.ag">Kepala Desa</option>
					<option value="Rusman, S.kom">Seketaris Desa</option>
			</select>
			@error('aparat_id')
					<div class="invalid-feedback">
							{{ $message }}
					</div>
			@enderror
			</div>

			<button type="button" class="btn btn-primary btn-block" id="t_cetak" data-fungsi="post">Cetak</button>
	
</div>
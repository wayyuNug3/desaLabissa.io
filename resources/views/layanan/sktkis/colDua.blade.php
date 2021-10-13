<div class="col bg-white mr-1 colDua">
    <h3>Surat</h3>
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
   
    {{-- pejabat --}}
    <div class="form-group">
        <label class=" my-0 "for="pejabat">Pejabat</label>
        <select id="pejabat" class="form-control @error('pejabat') is-nvalid @enderror" name="pejabat" value="{{ old('pejabat') }}">
                <option value="Supratman, S.ag">Kepala Desa</option>
                <option value="Rusman, S.kom">Seketaris Desa</option>
        </select>
        @error('pejabat')
                <div class="invalid-feedback">
                        {{ $message }}
                </div>
        @enderror
        </div>

        <button type="button" class="btn btn-primary btn-block" id="t_cetak" data-fungsi="post">Cetak</button>
	
</div>
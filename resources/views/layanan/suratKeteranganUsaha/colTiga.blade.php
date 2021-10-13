<div class="col-5 bg-white mr-1" hidden>
    <h3>Daftar Surat Keluar</h3>
	
		{{-- tabel --}}
		<div class="row">
			<div class="col">
				<table class="table shadow-sm bg-white table-hover table-striped table-sm ">
					<thead class="bg-primary text-light">
					<tr>
						<th scope="col">#</th>
						<th scope="col">No Surat</th>
						<th scope="col">Nama Pemohon</th>
						<th scope="col"></th>
					</tr>
					</thead>
					<tbody>
						@foreach($sku as $s)
							<tr>
								<th scope="row">{{ $loop->iteration }}</th>
								<td>{{ $s->noSurat }}</td>
								<td>{{ $s->penduduk->nama }}</td>
								<td class="text-right">
									<button class="btn btn-sm btn-info" id="t_detailSKU" data-toggle="modal" data-target="#modal" data-surat="{{ $s->id }}" data-pemohon="{{ $s->penduduk_id }}"><i class="fas fa-info-circle" id="t_detailSKU" data-surat="{{ $s->id }}" data-pemohon="{{ $s->penduduk_id }}"></i></button>

									<button type="button" class="btn btn-sm btn-warning" id="t_editSKU" data-id="{{ $s->id }}" data-pemohon="{{ $s->penduduk_id }}" ><i class="fas fa-edit" ></i></button>


									<form action="/suratKeteranganUsaha/{{ $s->id }}" method="POST" class="d-inline">
									@method('delete')
									@csrf
									<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="fas fa-trash"></i></button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		{{-- endtable --}}
</div>
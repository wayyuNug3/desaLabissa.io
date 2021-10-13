<div class="col colSatu bg-white mr-2 mb-3 p-2">
    <form action="/laporan">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <button class="btn btn-primary" type="submit" id="button-addon1">Cari Data</button>
            </div>
            <input type="text" class="form-control" placeholder="No surat...." aria-describedby="button-addon1" name="search" autocomplete="off" value="{{ request('search') }}">
        </div>
    </form>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Pemohon</th>
            <th scope="col">No. Surat</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($laporan as $l)
            <tr>
                <th class="align-middle" scope="row">{{ $loop->iteration }}</th>
                <td class="align-middle">{{ $l->nama }}</td>
                <td class="align-middle">{{ $l->penduduk->nama }}</td>
                <td class="align-middle">{{ $l->noSurat }}</td>
                <td class="align-middle">
                  <button type="button" class="btn btn-sm btn-info t_cetak" data-idsurat="{{ $l->surat_id }}" data-namasurat="{{ $l->nama }}"><i class="fas fa-print t_cetak"  data-idsurat="{{ $l->surat_id }}" data-namasurat="{{ $l->nama }}"></i></button>
                  <form action="/laporan/{{ $l->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')"><i class="fas fa-trash"></i></button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
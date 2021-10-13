@extends('dashboard.main')

@section('container')

<div class="row">
    <div class="col-lg-10">
        @include('penduduk.topArea')

        <div class="row">
            <div class="col">

                <table class="table shadow-sm bg-white table-hover table-striped table-sm ">
                    <thead class="bg-primary text-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($penduduk as $p)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->jenisKelamin }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td class="text-right">
                                    <button class="btn btn-sm btn-warning" id="t_editPenduduk" data-toggle="modal" data-target="#modalEditDataPenduduk" data-id="{{ $p->id }}">Edit</button>
                                    <form action="/penduduk/{{ $p->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('penduduk.rightBar')
    @include('penduduk.t_editPenduduk')
</div>


@endsection
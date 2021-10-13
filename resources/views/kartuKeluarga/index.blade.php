@extends('dashboard.main')

@section('container')
    <div class="row">
        <div class="col">
            <button class="mb-3 btn btn-primary btn-block t_tambahKK" data-toggle="modal" data-target="#modakKartuKeluarga">Input Kartu Keluarga</button>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif


    <div class="row">
        <div class="col bg-white mr-2 p-2">
            <h5>Daftar Kartu Keluarga</h5>

            <form action="/kartuKeluarga">
            <div class="input-group mb-3">
                    <input autocomplete="off" type="text" class="form-control" placeholder="Cari NO. KK...." name="search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>

            <ul class="list-group">
                @foreach($kartuKeluarga as $kk)
                    <li class="list-group-item" >
                        <span name="nokk">{{ $kk->nokk }}</span>
                        <button class="btn btn-sm btn-primary float-right t_Anggota" data-nokk="{{ $kk->nokk }}"><i class="fas fa-list-alt t_anggota" data-nokk="{{ $kk->nokk }}"></i></button>
                        <button class="btn btn-sm btn-info float-right mr-2 t_editKK" data-id="{{ $kk->id }}"><i class="fas fa-edit t_editKK"  data-toggle="modal" data-target="#modakKartuKeluarga" data-id="{{ $kk->id }}"></i></button>
                        <form action="/kartuKeluarga/{{ $kk->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger float-right mr-2"><i class="fas fa-trash" onclick="return confirm('Yakin??')"></i></button>
                        </form>
                    </li>
                @endforeach
            </ul>

        </div>
        <div class="col bg-white mr-2 p-2 listAnggota">
            <h1 class="mt-5 pt-5 text-center text-primary"><i class="fas fa-list-alt"></i></h1>
        </div>
    </div>

  @include('kartuKeluarga.modal')

  <script src="/js/kartuKeluarga/controller.js" ></script>
  <script src="/js/kartuKeluarga/function.js" ></script>
@endsection
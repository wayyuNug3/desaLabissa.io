@extends('dashboard.main')

@section ('container')


@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif



<div class="row">
    @include('laporan.suratKeluar.colSatu')
    @include('laporan.suratKeluar.colDua')
</div>


<script src="/js/laporan/controller.js"></script>
<script src="/js/laporan/function.js"></script>
<script src="/js/laporan/data.js"></script>


@endsection
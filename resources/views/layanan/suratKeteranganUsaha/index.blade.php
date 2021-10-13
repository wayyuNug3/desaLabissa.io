@extends('dashboard.main')

@section('container')

<div class="row">
    <div class="col">
        <div class="alert alert-primary" role="alert" id="success" hidden></div>
    </div>
</div>

<div class="row">
    @include('layanan/suratKeteranganUsaha/colSatu')
    @include('layanan/suratKeteranganUsaha/colDua')
    @include('layanan/suratKeteranganUsaha/colTiga')
</div>
<div class="row">
    @include('layanan/suratKeteranganUsaha/formatSurat')
</div>
@include('layanan/suratKeteranganUsaha/modal')

<script src="/js/suratKeteranganUsaha/main.js"></script>
<script src="/js/suratKeteranganUsaha/functionColSatu.js"></script>
<script src="/js/suratKeteranganUsaha/functionColDua.js"></script>
<script src="/js/suratKeteranganUsaha/functionColTiga.js"></script>


@endsection
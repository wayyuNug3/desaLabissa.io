@extends('dashboard.main')

@section('container')

<div class="row">
    <div class="col">
        <div class="alert alert-primary" role="alert" id="success" hidden></div>
    </div>
</div>

<div class="row">
    @include('layanan/suratKeteranganDomisili/colSatu')
    @include('layanan/suratKeteranganDomisili/colDua')
    @include('layanan/suratKeteranganDomisili/colTiga')
</div>
<div class="row">
    @include('layanan/suratKeteranganDomisili/formatSurat')
</div>

<script src="/js/suratKeteranganDomisili/controller.js"></script>
<script src="/js/suratKeteranganDomisili/function.js"></script>



@endsection
@extends('dashboard.main')

@section('container')

<div class="row">
    <div class="col">
        <div class="alert alert-primary" role="alert" id="success" hidden></div>
    </div>
</div>

<div class="row">
    @include('layanan/sktkis/colSatu')
    @include('layanan/sktkis/colDua')
</div>
<div class="row">
    @include('layanan/sktkis/formatSurat')
</div>
@include('layanan/sktkis/modal')

<script src="/js/sktkis/data.js"></script>
<script src="/js/sktkis/controller.js"></script>
<script src="/js/sktkis/function.js"></script>



@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg">
            <h1 class ="page-title">Todo Page</h1>
        </div>
    </div>
</div>    
@endsection

@push('css')
<style>
    .page-title{
        padding-top: 5vh;
        text-align: center;
        color: darkgoldenrod;
    }
</style>
@endpush
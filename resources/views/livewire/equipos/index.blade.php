@extends('adminlte::page')
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('equipos')
        </div>
    </div>
</div>
@endsection
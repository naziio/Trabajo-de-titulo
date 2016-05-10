@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-custom-horrible-red">
                <div class="panel-heading">Crear nueva noticia</div>
                <div class="panel-body">
<!--                    @include('admin.partials.errors')-->
                    {!! Form::open(['route'=>'admin.noticia.store', 'method'=>'POST'])!!}
                    @include('admin.noticia.partials.fields')
                    <button type="submit" class="btn btn-primary">Crear</button>
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
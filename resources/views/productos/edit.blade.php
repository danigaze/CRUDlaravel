@extends('layout')

@section('content')

    <h4 class="text-center">Editar Producto: {{ $producto->nombre  }}</h4>
    <a href="{{url('/productos/index')}}" class="btn btn-lg btn-link pull-right">volver</a>
    {!! Form::open([ 'method' => 'POST']) !!}
    @include('productos.partials.fields')
    <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}

    @include('productos.partials.delete')



@endsection
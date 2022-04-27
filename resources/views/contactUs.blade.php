@extends('layouts.app')

@section('js')


@endsection
@section('content')
    <div class="col-12 bgcontact p-5">
        <div class="col-4 p-3 mb-2 bg-gradient-dark text-dark" >
            <h1 class="display-one">CONTACT</h1>
            <p>Si tienes alguna consulta, o si deseas saber más en cómo puedo asistirte contáctame</p>
        </div>

    </div>
<div class="container pt-3 col-md-8">
    <h1>Formulario de Contacto</h1>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    {!! Form::open(['route'=>'contactus.store']) !!}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('Nombre:') !!}
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Ingresar Nombre']) !!}
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('Email:') !!}
        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Ingresar Email']) !!}
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>

    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
        {!! Form::label('Mensaje:') !!}
        {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Escribe tu mensaje']) !!}
        <span class="text-danger">{{ $errors->first('message') }}</span>
    </div>

    <div class="form-group">
        <button class="btn btn-success">Enviar Mensaje!</button>
    </div>

    {!! Form::close() !!}

</div>

    @endsection

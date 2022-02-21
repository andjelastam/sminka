@extends('layouts.app')
@section('content')
    <h1> Unesite novog sminkera </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\SminkerController@store'],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('studio','Studio')}}

         {{Form::text('studio','',['class'=>'form-control','placeholder'=>'studio'])}}
    </div>
    <div class="form-group">
        {{Form::label('ime','Ime')}}

         {{Form::text('ime','',['class'=>'form-control','placeholder'=>'ime'])}}
    </div>
    <div class="form-group">
         {{Form::label('prezime','Prezime')}}

        {{Form::text('prezime','', ['class'=>'form-control','placeholder'=>'prezime'])}}
    </div>
    <div class="form-group">
         {{Form::label('adresa','Adresa')}}

        {{Form::text('adresa','', ['class'=>'form-control','placeholder'=>'adresa'])}}
    </div>
    <div class="form-group">
        {{Form::label('cena','Cena')}}

        {{Form::text('cena','', ['class'=>'form-control','placeholder'=>'cena'])}}
    </div>
    <div class="form-group">
        {{Form::label('telefon','Telefon')}}

        {{Form::text('telefon','', ['class'=>'form-control','placeholder'=>'telefon'])}}
    </div>
    <div class="form-group">
        {{Form::label('brend','Brend')}}
        {{Form::text('brend','', ['class'=>'form-control','placeholder'=>'brend'])}}
    </div>
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection

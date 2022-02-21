@extends('layouts.app')
@section('content')
    <h1> Izmeni podatke o izabranom sminkeru </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\SminkerController@update',$r->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('studio','Studio')}}

     {{Form::text('studio',$r->studio,['class'=>'form-control','placeholder'=>'studio'])}}
</div>
<div class="form-group">
    {{Form::label('ime','Ime')}}

     {{Form::text('ime',$r->ime,['class'=>'form-control','placeholder'=>'ime'])}}
</div>
<div class="form-group">
     {{Form::label('prezime','Prezime')}}

    {{Form::text('prezime',$r->prezime, ['class'=>'form-control','placeholder'=>'prezime'])}}
</div>
<div class="form-group">
     {{Form::label('adresa','Adresa')}}

    {{Form::text('adresa',$r->adresa, ['class'=>'form-control','placeholder'=>'adresa'])}}
</div>
<div class="form-group">
    {{Form::label('cena','Cena')}}

    {{Form::text('cena',$r->cena, ['class'=>'form-control','placeholder'=>'cena'])}}
</div>
<div class="form-group">
    {{Form::label('telefon','Telefon')}}

    {{Form::text('telefon',$r->telefon, ['class'=>'form-control','placeholder'=>'telefon'])}}
</div>
<div class="form-group">
    {{Form::label('brend','Brend')}}

   {{Form::text('brend',$r->brend, ['class'=>'form-control','placeholder'=>'brend'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection

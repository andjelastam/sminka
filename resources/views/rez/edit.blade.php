@extends('layouts.app')
@section('content')
    <h1> Izmeni svoj termin sminkanja </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\RezervacijaController@update',$rez->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('ime','Ime')}}

     {{Form::text('ime',$rez->ime,['class'=>'form-control','placeholder'=>'ime'])}}
</div>
<div class="form-group">
     {{Form::label('prezime','Prezime')}}

    {{Form::text('prezime',$rez->prezime, ['class'=>'form-control','placeholder'=>'prezime'])}}
</div>
    {{Form::label('datum_zakazivanja','Datum sminkanja')}}

    {{ Form::date('datum_zakazivanja', $rez->datum_zakazivanja, ['class'=>'form-control','placeholder'=>'datum_zakazivanja'])}}
</div>
<div class="form-group">
    {{Form::label('vreme','Vreme')}}

    {{Form::time('vreme', $rez->vreme, ['class'=>'form-control','placeholder'=>'vreme'])}}
</div>
<div class="form-group">
    {{Form::label('studio','Studio')}}

    {{Form::text('studio', $rez->studio, ['class'=>'form-control','placeholder'=>'studio'])}}
</div>
<div class="form-group">
    {{Form::label('sminker_id','Sminker id')}}

    {{Form::text('sminker_id', $rez->sminker_id, ['class'=>'form-control','placeholder'=>'sminker_id'])}}
</div>
<div class="form-group">
    {{Form::label('user_id','User id')}}

    {{Form::text('user_id', $rez->user_id, ['class'=>'form-control','placeholder'=>'user_id'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection

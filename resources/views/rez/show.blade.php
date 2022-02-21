@extends('layouts.app')
@section('content')
<!-- dodali smo dugme da nnas vrati na prethodnu stranicu -->
<a href="/sminka/public/rezervacije" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci nosioca rezervacije: {{$rez->ime}} {{$rez->prezime}}</h1>
    <div>
        Zakazani datum:{{$rez->datum_zakazivanja}}
    </div>
    <div>
       Zakazano vreme: {{$rez->vreme}}
    </div>
    <div>
        Studio: {{$rez->studio}}
    </div>
    <div>
        Sminker: {{$rez->sminker_id}}
    </div>
    <div>
        Korisnik: {{$rez->user_id}}
     </div>
    <a href="/sminka/public/rezervacije/{{$rez->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\RezervacijaController@destroy',$rez->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection

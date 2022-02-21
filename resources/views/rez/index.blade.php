@extends('layouts.app')
@section('content')
    <h1> Svi rezervisani termini za sminkanje</h1>
     @if(count($rez)>0)
    @foreach ($rez as $r)
        <div class="well">
            <h3> <a href = "/sminka/public/rezervacije/{{$r->id}}">Prikazi nosioca rezervacije: {{$r->ime}}{{$r->prezime}}</a> </h3>
            <p> Datum zakazivanja: {{$r->datum_zakazivanja}}</p>
</div>
    @endforeach
    @endif
@endsection

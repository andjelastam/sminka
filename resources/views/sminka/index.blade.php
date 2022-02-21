@extends('layouts.app')
@section('content')
    <h1> Podaci o sminkerima: </h1>
     @if(count($r)>0)
    @foreach ($r as $r1)
        <div class="well">
            <h3> <a href = "/sminka/public/sminker/{{$r1->id}}">Prikazi sminkera: {{$r1->ime}}{{$r1->prezime}}</a> </h3>
</div>
    @endforeach
    @endif
@endsection

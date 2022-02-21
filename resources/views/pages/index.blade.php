
@extends('layouts.app')
@section('content')
<html>
<head>
	<meta http-equiv="Content-Language" content="sr" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>O nama</title>
</head>
 <body style="background-color: rgb(221, 167, 208) ;">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" >Zakazite sminkanje</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li ><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"> </span> Početna</a></li>
					<li class="active"><a href="#">O nama</a></li>
                   <li><a href="{{url('/sminker')}}"><span class="glyphicon glyphicon-city"> </span> Sminkeri</a></li>
					<li><a href="{{url('/rezervacije')}}"> Rezervacija</a></li>

				</ul>
                <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ms-auto">
                <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
		</div>
			</div>
	</nav>
	<div class="container">
        <h3>Sajt za zakazivanje sminkanja</h3>
        <img src="{{asset('/images/sminka.jpg')}}" alt="Slika se ne moze prikazati" height="380" width="700" align="center"/>
		<div class="row"  align="center">
			<div class="col-md-6">
                <br>
				<div id="dream-land" style="color:black" align="left">Šminkanje je velika ženska privilegija. Daje nam priliku da izrazimo sebe na uvek novi način, da istaknemo sve što je lepo na našem licu, a prikrijemo sve ono što smatramo nedostacima. Šminka je beskonačna prilika za kreativnost i igru, i inspiracija. Šminkanje je ono što nam daje dodatno samopouzdanje.
                    Usluga profesionalnog šminkanja se radi najkvalitetnijim proizvodima popularnih brendova. Uz svaki termin rezervisan na ovom sajtu, obraća se posebna pažnja na konsultacije i savetovanje kako bi se pronašao
savršen makeup look koji će odgovarati klijentovim potrebama i unikatnom stilu. Ukoliko je potrebno, pre šminkanja možete dobiti piling lica, hidratantnu masku i korekciju obrva besplatno. Veštačke trepavice su besplatne uz svako šminkanje. Na ovom sajtu mozete naci
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
<div class="container">
	<div class="row">
	</div>
</div>
<br>
<footer footer-fixed-down>
	<div class="container" >
		<div class="row">
		</div>
	</div>
</footer>
</body>
</html>
@endsection


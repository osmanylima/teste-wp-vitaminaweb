@extends('layouts.app')

@section('content')

<ul id="share">
  <li><a href="#."><img src="@asset('images/ico-phone.svg')" alt="" class="img-fluid"></a></li>
  <li><a href="#."><img src="@asset('images/ico-favorite.svg')" alt="" class="img-fluid"></a></li>
  <li><a href="#."><img src="@asset('images/ico-livro.svg')" alt="" class="img-fluid"></a></li>
  <li><a href="#."><img src="@asset('images/ico-predio.svg')" alt="" class="img-fluid"></a></li>
  <li><a href="#."><img src="@asset('images/ico-redes-sociais.svg')" alt="" class="img-fluid"></a></li>
</ul>

@include('partials.front-page.historia')
@include('partials.front-page.diferenciais')
@include('partials.front-page.noticias')
@include('partials.front-page.contatos')

@endsection

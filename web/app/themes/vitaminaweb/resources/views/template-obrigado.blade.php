{{--
  Template Name: Obrigado
--}}

@extends('layouts.app')

@section('content')
<div class="container pt-3 pb-7">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="text-center mb-5">
      @include('partials.content-page')
    </div>

    <div class="row unidade-desjoyaux">
      <div class="col-lg-4 col-md-5 p-4">
        <div class="d-grid gap-4">
          <h3>{{ get_field('cidade') }}</h3>

          @if(have_rows('campos_adicionais') )
          @while(have_rows('campos_adicionais')) @php(the_row())
          <div class="infos">
            <h5>{{ get_sub_field('nome') }}</h6>
            <h6>{!! get_sub_field('descricao') !!}</h6>
          </div>
          @endwhile
          @endif
        </div>
      </div>
      <div class="col-lg-8 col-md-7 p-0 position-relative">
        <img src="{{ get_field('foto') }}" alt="" class="card-img">
      </div>
    </div>
  @endwhile
</div>
@endsection
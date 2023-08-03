{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
<div class="container pt-3 pb-7">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="text-center">
      @include('partials.content-page')
    </div>
  @endwhile
</div>
@endsection

<section id="contatos" class="py-7">
  <div class="container">
    <div class="text-center col-xl-8 col-lg-9 col-12 mx-auto text-white mb-5">
      <h2>{{ get_field('titulo_faca_parte') }}</h2>
    </div>

    @if(have_rows('cards') )
    <div class="row lista-contatos">
      @while(have_rows('cards')) @php(the_row())
      <div class="col-lg-6 d-flex">
        <picture>
          <img src="{{ get_sub_field('imagem') }}" alt="" class="img-fluid">
        </picture>

        <div class="content-description col">
          <h5>{!! get_sub_field('titulo', false, false) !!}</h5>

          {!! get_sub_field('descricao') !!}

          <a href="{{ get_sub_field('link_cta') }}" class="btn btn-blue">{{ get_sub_field('nome_cta') }}</a>
        </div>
      </div>
      @endwhile
    </div>
    @endif
  </div>
</section>
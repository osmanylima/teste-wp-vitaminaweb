<section id="historia" class="mb-5">
  <div class="container mb-5">
    <div class="text-center">
      <h2 class="mb-2">{{ get_field('titulo') }}</h2>
      <h3 class="mb-5">{{ get_field('sub-titulo') }}</h3>

      {!! get_field('descricao_historia') !!}
    </div>
  </div>

  @if(have_rows('linha_tempo') )
  <div class="slider-historia offset-lg-1 col-lg-11">
    @while(have_rows('linha_tempo')) @php(the_row())
    <div class="historia-item">
      <h2 class="h4">{{ get_sub_field('ano') }}</h2>
      <img data-lazy="{{ get_sub_field('imagem') }}" alt="" class="img-fluid">
      <h3>{{ get_sub_field('titulo') }}</h3>
      <p>{{ get_sub_field('descricao') }}</p>
    </div>
    @endwhile
  </div>
  @endif

  <div class="container text-center">
    <h3 class="text-terciary">{{ get_field('frase_final') }}</h3>
  </div>
</section>
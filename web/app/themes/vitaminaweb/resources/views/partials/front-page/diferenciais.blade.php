<section id="diferenciais" class="pb-5">
  @if(have_rows('slider') )
  <div class="slider-single mb-5">
    @while(have_rows('slider')) @php(the_row())
      <div class="box-item">
        <img data-lazy="{{ get_sub_field('imagem') }}" alt="" class="img-fluid card-img">
        <div class="card-img-overlay">
          <div class="container text-white d-grid align-content-between h-100">
            <div class="text-center">
              <h2 class="card-title">{{ get_sub_field('titulo_diferenciais') }}</h2>
              <h3>{{ get_sub_field('sub-titulo_diferenciais') }}</h3>
            </div>

            <div class="content-description col-lg-7 col-md-11">
              <p class="number">{{ get_sub_field('numero') }}</p>
              <h4>{{ get_sub_field('titulo') }}</h4>
              {!! get_sub_field('descricao') !!}
            </div>
          </div>
        </div>
      </div>
    @endwhile
  </div>
  @endif

  <div class="container">
    <div class="text-center">
      {!! get_field('descricao_diferenciais') !!}

      <a href="{{ get_field('link_cta') }}" class="btn btn-blue mb-5 mt-4">{{ get_field('nome_cta') }}</a>

      <h3>{{ get_field('frase_diferenciais') }}</h3>
    </div>
  </div>
</section>
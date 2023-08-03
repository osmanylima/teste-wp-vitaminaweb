<section id="noticias" class="py-lg-7 py-5">
  <div class="container-lg pe-0 pe-lg-3">
    <div class="text-center mb-5">
      <h2>{{ get_field('titulo_noticias') }}</h2>
      <h3>{{ get_field('sub_titulo_noticias') }}</h3>
    </div>

    <div class="slider-noticias">
      @while($noticias->have_posts())
      @php($noticias->the_post())
      <article>
        <div class="d-flex h-100 flex-column card-img-top">
          <div class="card-top">
            <a href="{{ get_permalink() }}">{!! get_the_post_thumbnail('', 'thumbnail', array('class' => 'w-100')) !!}</a>
          </div>

          <div class="card-body px-0 pb-0 text-center">
            <p class="card-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></p>
          </div>
        </div>
      </article>
      @endwhile
      @php( wp_reset_query() )
    </div>
  </div>
</section>
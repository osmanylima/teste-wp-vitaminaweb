<footer class="content-info pt-7 pb-4">
  <div class="container">
    <div class="w-100 text-center mb-md-7 mb-5">
      <img src="@asset('images/logo-desjoyaux-footer.svg')" alt="{{ get_bloginfo('name', 'display') }}" class="img-fluid">
    </div>

    <div class="row mb-md-7 mb-5">
      @if (has_nav_menu('footer_01_navigation'))
      <div class="col-md-3 col-sm-6 col-12 mb-sm-0 mb-5 d-none d-md-block">
        <?php
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object($locations['footer_01_navigation']);

          echo '<h6>'.$menu->name.'</h6>';
        ?>
        <nav class="nav-footer">
          {!! wp_nav_menu(['theme_location' => 'footer_01_navigation', 'menu_class' => 'nav align-items-center']) !!}
        </nav>
      </div>
      @endif

      @if (has_nav_menu('footer_02_navigation'))
      <div class="col-md-3 col-sm-6 col-12 mb-sm-0 mb-5 d-none d-md-block">
        <?php
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object($locations['footer_02_navigation']);

          echo '<h6>'.$menu->name.'</h6>';
        ?>
        <nav class="nav-footer">
          {!! wp_nav_menu(['theme_location' => 'footer_02_navigation', 'menu_class' => 'nav align-items-center']) !!}
        </nav>
      </div>
      @endif

      @if(have_rows('contatos', 'option') )
      <div class="col-md-3 col-sm-6 col-12 mb-sm-0 mb-5 text-center text-sm-start">
        @while(have_rows('contatos', 'option')) @php(the_row())
          <h6>{{ get_sub_field('titulo') }}</h6>
          <p>{{ get_sub_field('informacao') }}</p>
        @endwhile

        @if(have_rows('cta_footer', 'option') )
        @while(have_rows('cta_footer', 'option')) @php(the_row())
          <a href="{{ get_sub_field('link_cta_footer') }}" target="{{ get_sub_field('nova_aba') ? '_blank' : '_self' }}" class="btn btn-small">{{ get_sub_field('nome_cta_footer') }}</a>
        @endwhile
        @endif
      </div>
      @endif

      @if(have_rows('redes_sociais', 'option') )
      <div class="col-md-3 col-sm-6 col-12 mb-sm-0 mb-lg-5 text-center text-sm-start">
        <h6>REDES SOCIAIS</h6>

        <ul class="nav ps-0">
          @while(have_rows('redes_sociais', 'option')) @php(the_row())
            <li><a href="{{ get_sub_field('link_redes_sociais') }}" target="_blank"><img src="{{ get_sub_field('logo') }}" alt="" class="img-fluid">{{ get_sub_field('username') }}</a></li>
          @endwhile
        </ul>
      </div>
      @endif
    </div>

    <div class="w-100 text-center border-top pt-3 mb-5 px-4 px-sm-0">
      <p class="mb-1">Este site usa cookies e dados pessoais de acordo com os nossos Termos de Uso e Política de Privacidade.</p>

      <p><a href="#." class="text-blue-dark text-uppercase fs-12">Configuração de Cookies</a></p>
    </div>

    <div class="d-md-flex d-grid justify-content-md-between justify-content-center gap-3">
      <p class="mb-md-0">Desjoyaux | Todos os Direitos Reservados</p>

      <a href="https://vitaminaweb.com.br/" target="_blank" class="assinatura">DESENVOLVIMENTO: <img src="@asset('images/logo-vitamina-web.svg')" alt="" class="img-fluid"></a>
    </div>
  </div>
</footer>
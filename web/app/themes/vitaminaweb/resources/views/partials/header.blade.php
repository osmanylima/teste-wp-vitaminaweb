<header class="banner">
  <div class="container d-flex justify-content-between align-items-center nav-fixed">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="@asset('images/logo-desjoyaux.svg')" alt="{{ get_bloginfo('name', 'display') }}" class="img-fluid">
    </a>
    <nav class="nav-primary d-lg-flex gap-lg-7 align-items-center col-xl-9 col-lg-10 justify-content-lg-between">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav align-items-center']) !!}
      @endif
      <a href="{{ home_url('/contato/') }}" class="btn btn-cta-white btn-small">CONTATO</a>
    </nav>
    <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button d-lg-none">
      <i class="toggle-menu-button-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </i>
    </button>
  </div>
</header>
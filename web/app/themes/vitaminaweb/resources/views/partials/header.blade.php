<header class="banner">
  <div class="container d-flex justify-content-between align-items-center nav-fixed">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="@asset('images/logo.png')" alt="{{ get_bloginfo('name', 'display') }}" alt="" class="img-fluid">
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav align-items-center']) !!}
      @endif
    </nav>
  </div>
</header>
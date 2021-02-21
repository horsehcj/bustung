<header class="header">
  <div class="container">
    <div class="d-flex justify-content-between">
      <a title="Bus Tung 巴士通" class="logo" href="{{ home_url('/') }}">
        <img src="@asset('images/bustung_logo.png')">
      </a>
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>

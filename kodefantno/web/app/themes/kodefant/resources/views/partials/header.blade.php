<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary mobile-hidden">
        <a class="brand desktop-hidden mobile-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
<div class ="mobile-button-container desktop-hidden">
  <div class="mobile-button">
    <i class="fa fa-bars" aria-hidden="true"></i> @php _e('MENY') @endphp
  </div>
</div>

@if (is_front_page()) @include('partials/landing-header') @endif


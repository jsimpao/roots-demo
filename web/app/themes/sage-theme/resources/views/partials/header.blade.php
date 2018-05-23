{{--
<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
--}}

<header class="header">
    <nav class="main-navigation-container">
        <a href="index.html"><img src="<?php bloginfo('template_url') ?>/assets/images/glass-eye-logo.png" alt="" class="logo"></a>
		<?php
            wp_nav_menu( $arg = array(
                'menu_class'     => 'main-navigation',
                'theme_location' => 'primary'
            ));
		?>
    </nav>
</header>

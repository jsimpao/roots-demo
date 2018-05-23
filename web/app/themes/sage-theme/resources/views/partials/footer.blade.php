{{--
<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
--}}

<footer class="footer">
    <nav class="footer-navigation">
		<?php
            wp_nav_menu( $arg = array(
                'menu_class'     => 'footer-navigation',
                'theme_location' => 'footer'
            ));
		?>
    </nav>
    <p class="copyright">
        <small>All content on this site &copy; Glass Eye Creative</small>
    </p>
</footer>

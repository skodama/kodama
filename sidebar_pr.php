<div id="sidebar">
<div class="wrap">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<?php endif; ?>
</div>
</div>
<!-- nav/ -->
<nav>
	<?php wp_nav_menu(array('theme_location' => 'submenu' ,'menu_class' => 'nav' )); ?> 
</nav>
<!-- /nav -->

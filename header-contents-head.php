<!--contents_head/ -->
	<div class="wrap">
		<h1 class="head_label <?php if(is_front_page())echo 'front' ?>"> <?php echo get_post_meta($post->ID,'head_label' ,true); ?> </h1>
		<p class="head_text <?php if(is_front_page())echo 'front' ?>"> <?php echo get_post_meta($post->ID,'head_text' ,true); ?> </p>
		<?php if (is_front_page()) : ?>
		<p>
		<a href="?page_id=58" class="btn btn-primary btn-large">捜索方法 &raquo;</a>
		<a href="?page_id=137" class="btn btn-large">料金説明 &raquo;</a>
		</p>
		<?php endif; ?>
	</div>
	<!-- <img src="<?php header_image(); ?>" alt=""alt title= width="100%" height="" /> -->
	<!-- <img src="<?php echo get_field('head_img'); ?>" alt=""alt title= width="100%" height="" /> -->
<!-- /contents_head -->

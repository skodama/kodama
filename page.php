<?php get_header(); ?>

 <!-- contents/ -->
<div class="contents">
<!-- contents_wrap/ -->
<div class="contents_wrap">
<?php get_header('contents-head'); ?>

<!-- content_wrap/ -->
<div class="content_wrap">
<!-- mainContent/ -->
<div class="main_content">
	<div id="content">
               <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                         <div class="post">
                              <h1 class="title"><?php the_title(); ?></h1>
                              
                              <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
                              
                              <?php the_content(); ?>
                         </div><!-- /.post -->
                         
                    <?php endwhile; ?>
                     
                    <?php else : ?>
                     
                        <h2 class="title">記事が見つかりませんでした。</h2>
                        <p>検索で見つかるかもしれません。</p><br />
                        <?php get_search_form(); ?>
                     
                    <?php endif; ?>

	</div>
</div>
<!-- /mainContent -->
<!-- subContent/ -->
<div class="sub_content">
<div class="sub_wrap">

<?php get_sidebar(); ?>

</div>
</div>
<!-- /subContent -->
</div>
<!-- /content_wrap -->

</div>
<!-- /contents_wrap -->
</div>
<!-- /contents -->

 
<?php get_footer(); ?>
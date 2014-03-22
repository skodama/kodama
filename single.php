<?php get_header(); ?>
 
 
 <!-- contents/ -->
<div class="contents">
<!-- contents_wrap/ -->
<div class="contents_wrap">

<!-- content_wrap/ -->
<div class="content_wrap">

<?php get_header('contents-head'); ?>

<!-- mainContent/ -->
<div class="main_content">
	<div id="content">
	
<?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                         <div class="post">
                              <h1 class="title"><?php the_title(); ?></h1>
                              <div class="blog_info">
                                   <ul>
                                        <li class="cal"><?php the_time('Y年m月j日') ?></li>
                                        <li class="cat"><?php the_category(', ') ?></li>
                                        <li class="tag"><?php the_tags('', ', '); ?></li>
                                   </ul>
                                   <br class="clear" />
                              </div>
                              
                              <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
                              
                              <?php the_content(); ?>
                         </div><!-- /.post -->
                         
                    <?php endwhile; ?>
                        
                        <div class="nav-below">
                              <span class="nav-previous"><?php previous_post_link('%link', '古い記事へ'); ?></span>
                              <span class="nav-next"><?php next_post_link('%link', '新しい記事へ'); ?></span>
                         </div><!-- /.nav-below -->
 
<!-- Commetns -->                       
                         <?php comments_template(); ?>
                     
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
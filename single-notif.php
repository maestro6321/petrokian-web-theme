<?php 
get_header();
get_template_part('inc/index','header');
?>
<section class="container single-container">
<article class="single-post-content">
    <header>
        <div class="post-title">
            <h2><a href="<?php the_permalink(); ?> "><?php echo get_post_meta(get_the_id(),'notif_title',true); ?></a></h2>
        </div>
    </header>
<div class="post-content">
<?php echo get_post_meta(get_the_id(),'notif_content',true); ?>
</div>
<div class="post-img">
    <!-- <img src="<?php the_post_thumbnail(); ?>/images/1696393902726.jpg" alt=""> -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/1696393902726.jpg" alt="" style="width: -webkit-fill-available;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/1696393902726.jpg" alt="" style="width: -webkit-fill-available;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/1696393902726.jpg" alt="" style="width: -webkit-fill-available;">
</div>
</article>
</section>

 
<?php
// get_template_part('inc/index','news');
get_footer(); 

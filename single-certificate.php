<?php 
get_header();
while (have_posts()) {
the_post();
?>
<section class="container single-container">
<article class="single-post-content">
    <header>
        <div class="post-title">
            <h5 class="text-center"><?php the_title(); ?></h5>
            <br>
            <hr>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="bd-placeholder-img card-img-top" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
    </header>
<div class="post-content">
<?php the_content(""); }   ?>
</div>
</article>
</section>
<?php
get_footer(); 
?>
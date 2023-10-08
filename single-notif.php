<?php 
get_header();
get_template_part('inc/index','header');

while (have_posts()) {
the_post();
?>
<section class="container single-container">
<article class="single-post-content">
    <header>
        <div class="post-title">
            <!-- <h5><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h5> -->
            <h5><?php the_title(); ?></h5>
            <br>
            <hr>
        </div>
    </header>
<div class="post-content">
<?php the_content(""); }   ?>
</div>
<div class="post-img">


</div>
</article>
</section>

 
<?php
// get_template_part('inc/index','news');
get_footer(); 
?>
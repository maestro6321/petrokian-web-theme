<?php 
get_header();
while (have_posts()) {
the_post();
?>
<section class="container single-container">
<article class="single-post-content">
    <header>
        <div class="post-title">
            <h5><?php the_title(); ?></h5>
            <br>
            <hr>
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
<?php
$query1 = new WP_Query( array( 
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' => 'پست ویژه', 
  'posts_per_page' => 3 ,  
  'post__not_in'   => get_option( 'sticky_posts' ),
  'paged' => $paged
) ); 

if ( $query1->have_posts() ) {
  while ( $query1->have_posts() ) :
      $query1->the_post();

?>
<section class="post-index container">
    <div class="post-content row text-right">
        <div class="col-sm-12 col-md-7 col-12 position-relative">
          <h5><?php the_title(); ?></h5>
          <br>
          <hr>
          <a href="<?php echo get_post_permalink( get_the_id() ); ?>">
            <button class="btn btn-warning btn-lg float-left btn-sm"> ادامه مطلب <span
                class="spinner-grow spinner-grow-sm"></span> </button>
          </a>
    </div>
    <div class=" pic col-sm-12 col-md-5 col-12 ">
      <a href="<?php echo get_post_permalink( get_the_id() ); ?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_id() );  ?>" alt=""></a>
    </div>
</section>
<?php

  endwhile;
  ?>
 
  <?php
  } 

/* Restore original Post Data */       
        // wp_reset_query();
        wp_reset_postdata();
?>
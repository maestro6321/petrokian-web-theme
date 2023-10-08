<?php
$the_query = new WP_Query( array( 
  'category_name' => 'پست ویژه', 
  'posts_per_page' => 5 
) ); 

if ( $the_query->have_posts() ) {
  while ( $the_query->have_posts() ) {
      $the_query->the_post();

?>
<section class="post-top container">
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
    <div class=" col-sm-12 col-md-5 col-12 ">
      <a href="<?php echo get_post_permalink( get_the_id() ); ?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_id() );  ?>" alt="" style="width: -webkit-fill-available;"></a>
    </div>
</section>




<?php
          }
  } 
  
/* Restore original Post Data */       
        wp_reset_query();
        ?>
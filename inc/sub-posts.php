<section class="about-top container">
<?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$query = array( 
 'post_type' => 'post' ,
//  'order' => 'ASC',
//  'orderby' => 'ID',
 'paged' => $paged , );
query_posts($query); ?>
 
 
<?php if(have_posts()):
 while(have_posts()): the_post(); ?>
          <!-- <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> -->
          <div class="post-content row text-right">
        <div class="col-sm-12 col-md-7 col-12 position-relative">
          <h5><?php the_title(); ?></h5>
          <br>
          <h1><?php the_excerpt(); ?></h1>
          <hr>
          <a href="<?php echo get_post_permalink( get_the_id() ); ?>">
            <button class="btn btn-warning btn-lg float-left btn-sm"> ادامه مطلب <span
                class="spinner-grow spinner-grow-sm"></span> </button>
          </a>
    </div>
    <div class=" pic col-sm-12 col-md-5 col-12 ">
      <a href="<?php echo get_post_permalink( get_the_id() ); ?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_id() );  ?>" alt=""></a>
    </div>          
    <br>
    <hr>
            <!-- content -->
 
        <?php endwhile; ?>
 
        <div class="pagination text-center">
 <?php the_posts_pagination( array(
         'mid_size'  => 10,
         'prev_text' => __( '<i class="fas fa-angle-right"></i>', 'textdomain' ),
        'next_text' => __( '<i class="fas fa-angle-left"></i>', 'textdomain' ),
     ) ); ?>
 <?php else:{
 echo("متاسفانه مطلبی جهت نمایش وجود ندارد");
 }
 ?>
<?php endif; ?>
</section>
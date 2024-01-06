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
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <!-- content -->
 
        <?php endwhile; ?>
 
        <div class="pagination text-center">
 <?php the_posts_pagination( array(
         'mid_size'  => 10,
         'prev_text' => __( '<i class="fas fa-angle-right"></i>', 'textdomain' ),
        'next_text' => __( '<i class="fas fa-angle-left"></i>', 'textdomain' ),
     ) ); ?>
 
<?php endif; ?>
</section>
<section class="news container bg-dark">
      <div class="row">
        <div class="col-xs-6 col-md-6 col-12">
          <div class="last-news">
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="button">اخبار</button>
            </div>
            <div class="myWrapper-news">
                <ul class="list-unstyled" style="width: -webkit-fill-available;">
                  <?php
                  $the_query = new WP_Query( array( 
                      'post_type' => 'post',
                      'post_status' => 'publish',
                      'category_name' => 'پست عادی', 
                      'posts_per_page' => 3 ,  
                      'post__not_in'   => get_option( 'sticky_posts' ),
                      'paged' => $paged
                    ) ); 

                  if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) :
                        $the_query->the_post(); ?>
                  <li><a href="<?php echo get_post_permalink( get_the_id() ); ?>"><?php the_title(); ?></a></li>
            <?php
              endwhile;
            }
            else{
              ?>
                  <li><a href="">مطلبی وجود ندارد</a></li>
              <?php
            }
            wp_reset_postdata();
            ?>
                </ul>
              </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-6 col-12">
          <div class="other-news">
          <div class="last-news">
            <div class="d-grid gap-2">
              <button class="btn btn-info" type="button">فراخوان</button>
            </div>
            <div class="myWrapper-news">
                <ul class="list-unstyled" style="width: -webkit-fill-available;">
                  <?php
                  $the_query = new WP_Query( array( 
                      'post_type' => 'post',
                      'post_status' => 'publish',
                      'category_name' => 'فراخوان', 
                      'posts_per_page' => 3 ,  
                      'post__not_in'   => get_option( 'sticky_posts' ),
                      'paged' => $paged
                    ) ); 

                  if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) :
                        $the_query->the_post(); ?>
                  <li><a href="<?php echo get_post_permalink( get_the_id() ); ?>"><?php the_title(); ?></a></li>
            <?php
              endwhile;
            }
            else{
              ?>
                  <li><a href="">مطلبی وجود ندارد</a></li>
              <?php
            }
            wp_reset_postdata();
            ?>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </section>
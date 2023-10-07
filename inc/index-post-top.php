<?php
          $query = new WP_Query(array(
            'post_type' => 'notif',
            'post_status' => 'publish'
        ));
        
        
        while ($query->have_posts()) {
            $query->the_post();
            $post_type = get_post_meta( get_the_id(), 'notif_type', true );
            if($post_type == 1){?>
<section class="post-top container">
    <div class="post-content row text-right">
        <div class="col-sm-12 col-md-7 col-12 position-relative">
          <h5><?php echo get_post_meta( get_the_id(), 'notif_title', true ); ?></h5>
          <a href="<?php echo get_post_permalink( get_the_id() ); ?>">
            <button class="btn btn-warning btn-lg float-left btn-sm"> ادامه مطلب <span
                class="spinner-grow spinner-grow-sm"></span> </button>
          </a>
    </div>
    <div class=" col-sm-12 col-md-5 col-12 ">
      <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/1696393902726.jpg" alt="" style="width: -webkit-fill-available;"></a>
    </div>
</section>
<?php
  }
}
        
        wp_reset_query();
        ?>
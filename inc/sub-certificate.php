<section class="about-top container cert">
<?php
      if(isset($_GET['id'])){
        $id=$_GET['id'];
        if($id=='1'){
          $query = array( 
            'post_type' => 'certificate' ,
               'category_name' => 'گواهینامه',
           );
           query_posts($query); ?>
           
             <div class="post-content row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             <?php if(have_posts()):
            while(have_posts()): the_post(); ?>
               <div class="col">
                 <div class="card shadow-sm">
                   <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="bd-placeholder-img card-img-top" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                   <div class="card-body">
                     <div class="d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?php echo get_post_permalink( ); ?>" target=”_blank”>View</a></button>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <?php endwhile;
               endif; ?>
             </div>
             <?php
        }
        elseif($id=='2'){
          $query = array( 
            'post_type' => 'certificate' ,
               'category_name' => 'تقدیرنامه',
           );
           query_posts($query); ?>
           
             <div class="post-content row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             <?php if(have_posts()):
            while(have_posts()): the_post(); ?>
               <div class="col">
                 <div class="card shadow-sm">
                   <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="bd-placeholder-img card-img-top" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                   <div class="card-body">
                     <div class="d-flex justify-content-between align-items-center">
                       <div class="btn-group">
                         <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?php echo get_post_permalink( ); ?>" target=”_blank”>View</a></button>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <?php endwhile;
               endif; ?>
             </div>
             <?php
        }
      else{
        global $wp_query;
        $wp_query->set_404();
        status_header( 404 );
        get_template_part( 404 );
      }
    }else{
      $query = array( 
        'post_type' => 'certificate' ,
       );
       query_posts($query); ?>
       
         <div class="post-content row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
         <?php if(have_posts()):
        while(have_posts()): the_post(); ?>
           <div class="col">
             <div class="card shadow-sm">
               <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="bd-placeholder-img card-img-top" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
               <div class="card-body">
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                     <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?php echo get_post_permalink( ); ?>" target=”_blank”>View</a></button>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php endwhile;
           endif; ?>
         </div>
         <?php
    }
       ?>
</section>
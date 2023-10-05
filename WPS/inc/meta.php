<?php

class wps_post_editor{
    public function __construct(){  
        add_action( 'init', [$this,"create_post_type_notif" ]);
        add_action( 'add_meta_boxes' , [$this, "notif_meta_box"] );
        add_action( 'save_post' , [$this, "notif_save_box"] );
    }
    public function create_post_type_notif(){
        register_post_type( 'notif',
		array(
			'labels'       => array(
            'name'       => __( 'Your Post' ),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
            'title',
            'thumbnail',
			),
			'taxonomies'   => array(
            'post_tag',
            'category',
			)
		)
	);
	register_taxonomy_for_object_type( 'category', 'notif' );
	register_taxonomy_for_object_type( 'post_tag', 'notif' );
    }
    public function notif_meta_box(){
        add_meta_box( 'wpc_editor', 'post_editor', [$this,"notif_box_html"], ['notif'] );
        
    }
    public function notif_save_box($post_id){
       
    }
    
    public function notif_box_html(){  ?>
<!-- html -->


<label for="comment">Comments:</label>
<textarea class="form-control" rows="5" id="txt1" name="text"></textarea>




<br>
<div class="form-check">
  <input type="radio" class="form-check-input" id="post_radio1" name="optradio" value="vip" checked>پست ویژه
  <label class="form-check-label" for="radio1"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="post_radio2" name="optradio" value="norm">پست عادی
  <label class="form-check-label" for="radio2"></label>
</div>





<!-- html -->
    <?php    
    }
}
new wps_post_editor();

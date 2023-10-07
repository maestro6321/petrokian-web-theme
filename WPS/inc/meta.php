<?php

class wps_post_editor{
    public function __construct(){  
        add_action( 'init', [$this,'create_post_type_notif' ]);
        add_action( 'add_meta_boxes' , [$this, 'notif_meta_box'] );
        add_action( 'save_post' , [$this, 'notif_save_box'] );
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
        add_meta_box( 'wps_editor', 'post editor', [$this,"notif_box_html"], ['notif'] );
        
    }
    public function notif_save_box($post_id){

        if(isset($_POST['txt_title']) && isset($_POST['txt_content'])){
            $txt_title = sanitize_textarea_field( $_POST['txt_title']);
            $txt_content = sanitize_textarea_field( $_POST['txt_content']);
            $txt_type=sanitize_text_field( $_POST['optradio'] );
            update_post_meta( $post_id, 'notif_title', $txt_title );
            update_post_meta( $post_id, 'notif_content', $txt_content );
            update_post_meta( $post_id, 'notif_type', $txt_type );
        }

    }
    
    public function notif_box_html(){  ?>
<!-- html -->


<label for="comment">Title:</label>
<textarea class="form-control" rows="5" id="txt_1" name="txt_title"><?php echo get_post_meta( get_the_id(), 'notif_title', true ); ?></textarea>
<label for="comment">Content:</label>
<textarea class="form-control" rows="5" id="txt_2" name="txt_content"><?php echo get_post_meta( get_the_id(), 'notif_content', true ); ?></textarea>



<br>
<?php

$type_radio = get_post_meta( get_the_id(), 'notif_type', true );

if($type_radio == 2){
    ?>
<div class="form-check">
  <input type="radio" class="form-check-input" id="post_radio1" name="optradio" value="1">پست ویژه
  <label class="form-check-label" for="radio1"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="post_radio2" name="optradio" value="2" checked>پست عادی
  <label class="form-check-label" for="radio2"></label>
</div>
    <?php
}elseif($type_radio == 1){
?>
<div class="form-check">
  <input type="radio" class="form-check-input" id="post_radio1" name="optradio" value="1"checked>پست ویژه
  <label class="form-check-label" for="radio1"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="post_radio2" name="optradio" value="2" >پست عادی
  <label class="form-check-label" for="radio2"></label>
</div>

<?php
}else{
    ?>
<div class="form-check">
  <input type="radio" class="form-check-input" id="post_radio1" name="optradio" value="1"checked>پست ویژه
  <label class="form-check-label" for="radio1"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="post_radio2" name="optradio" value="2" >پست عادی
  <label class="form-check-label" for="radio2"></label>
</div>
<?php
}
?>






<!-- html -->
    <?php    
    }
}
new wps_post_editor();

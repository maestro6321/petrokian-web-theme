<?php

class wps_post_type{
    public function __construct(){  
        add_action( 'init', [$this,'create_post_type_notif' ]);
        add_action( 'add_meta_boxes' , [$this, 'notif_meta_box'] );
        add_action( 'save_post' , [$this, 'notif_save_box'] );
        add_action('init',[$this,'options_post_notif']);    
    }
    public function options_post_notif(){
        // add_post_type_support('notif','thumbnail');
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
            'media',
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
// new wps_post_type();


class wps_post_type_slider{
    public function __construct(){  
        add_action( 'init', [$this,'create_post_type_slider' ]);
        // add_action( 'add_meta_boxes' , [$this, 'slider_meta_box'] );
        // add_action( 'save_post' , [$this, 'slider_save_box'] );
        add_action('init',[$this,'options_post_slider']);    
    }
    public function options_post_slider(){
        add_post_type_support('slider','thumbnail');
    }
    public function create_post_type_slider(){
        register_post_type( 'slider',
		array(
			'labels'       => array(
            'name'       => __( 'Slider' ),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
            'title',
            'media',
			)
		)
	);
	register_taxonomy_for_object_type( 'category', 'slider' );
	register_taxonomy_for_object_type( 'post_tag', 'slider' );
    }
    public function slider_meta_box(){
        add_meta_box( 'wps_editor', 'post editor', [$this,"slider_box_html"], ['slider'] );
        
    }
    public function slider_save_box($post_id){

        if(isset($_POST['txt_title']) && isset($_POST['txt_content'])){
            $txt_title = sanitize_textarea_field( $_POST['txt_title']);
            $txt_content = sanitize_textarea_field( $_POST['txt_content']);
            $txt_type=sanitize_text_field( $_POST['optradio'] );
            update_post_meta( $post_id, 'slider_title', $txt_title );
            update_post_meta( $post_id, 'slider_content', $txt_content );
            update_post_meta( $post_id, 'slider_type', $txt_type );
        }

     }
    
    public function slider_box_html(){  ?>
            <!-- html -->


            <label for="comment">Title:</label>
            <textarea class="form-control" rows="5" id="txt_1" name="txt_title"><?php echo get_post_meta( get_the_id(), 'slider_title', true ); ?></textarea>
            <label for="comment">Content:</label>
            <textarea class="form-control" rows="5" id="txt_2" name="txt_content"><?php echo get_post_meta( get_the_id(), 'slider_content', true ); ?></textarea>



            <br>
            <?php

            $type_radio = get_post_meta( get_the_id(), 'slider_type', true );

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
// new wps_post_type_slider();


// new post_type_certificate
add_action( 'init', function() {
	register_post_type( 'certificate', array(
	'labels' => array(
		'name' => 'Certificate',
		'singular_name' => 'Certificate',
		'menu_name' => 'Certificate',
		'all_items' => 'All Certificate',
		'edit_item' => 'Edit Certificate',
		'view_item' => 'View Certificate',
		'view_items' => 'View Certificate',
		'add_new_item' => 'Add New Certificate',
		'add_new' => 'Add New Certificate',
		'new_item' => 'New Certificate',
		'parent_item_colon' => 'Parent Certificate:',
		'search_items' => 'Search Certificate',
		'not_found' => 'No certificate found',
		'not_found_in_trash' => 'No certificate found in Trash',
		'archives' => 'Certificate Archives',
		'attributes' => 'Certificate Attributes',
		'insert_into_item' => 'Insert into certificate',
		'uploaded_to_this_item' => 'Uploaded to this certificate',
		'filter_items_list' => 'Filter certificate list',
		'filter_by_date' => 'Filter certificate by date',
		'items_list_navigation' => 'Certificate list navigation',
		'items_list' => 'Certificate list',
		'item_published' => 'Certificate published.',
		'item_published_privately' => 'Certificate published privately.',
		'item_reverted_to_draft' => 'Certificate reverted to draft.',
		'item_scheduled' => 'Certificate scheduled.',
		'item_updated' => 'Certificate updated.',
		'item_link' => 'Certificate Link',
		'item_link_description' => 'A link to a certificate.',
	),
	'public' => true,
	'show_in_rest' => true,
	'supports' => array(
		0 => 'title',
		1 => 'thumbnail',
	),
	'taxonomies' => array(
		0 => 'category',
	),
	'delete_with_user' => false,
) );
} );
// new post_type_certificate

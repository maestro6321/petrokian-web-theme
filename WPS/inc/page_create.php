<?php
function create_page_wp($tittle){
    $data=$tittle;
    $check_page_exist = get_page_by_title($data, 'OBJECT', 'page');
// Check if the page already exists
if(empty($check_page_exist)) {
    $page_id = wp_insert_post(
        array(
        'comment_status' => 'close',
        'ping_status'    => 'close',
        'post_author'    => 1,
        'post_title'     => ucwords($data),
        'post_name'      => strtolower(str_replace(' ', '-', trim($data))),
        'post_status'    => 'publish',
        'post_content'   => 'Content of the page',
        'post_type'      => 'page',
        'post_template'  => 'About Us Page'
        // 'post_parent'    => 'About us'
        )
    );
}
}

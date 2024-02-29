<?php
//function to add custom media field

// function custom_media_add_media_custom_field( $form_fields, $post ) {
//     $field_value = get_post_meta( $post->ID, 'custom_media_style', true );

//     $form_fields['custom_media_style'] = array(
//         'label' => 'Is Foo',
//         'input' => 'html',
//         'html' => '<label for="attachments-'.$post->ID.'-foo"> '.
//             '<input type="checkbox" id="attachments-'.$post->ID.'-foo" name="attachments['.$post->ID.'][foo]" value="1"'.($foo ? ' checked="checked"' : '').' /> Yes</label>  ',
//         'value' => $foo,
//         'helps' => 'Check for yes'
//     );

//     return $form_fields;
// }
// add_filter( 'attachment_fields_to_edit', 'custom_media_add_media_custom_field', null, 2 );

// //save your custom media field
// function custom_media_save_attachment( $attachment_id ) {
//     if ( isset( $_REQUEST['attachments'][ $attachment_id ]['custom_media_style'] ) ) {
//         $custom_media_style = $_REQUEST['attachments'][ $attachment_id ]['custom_media_style'];
//         update_post_meta( $attachment_id, 'custom_media_style', $custom_media_style );

//     }
// }
// add_action( 'edit_attachment', 'custom_media_save_attachment' );


function attachment_fields_to_edit_islogoimage( $form_fields, $post ) {
    $islogo = (bool) get_post_meta($post->ID, '_islogo', true);
    $checked = ($islogo) ? 'checked' : '';

    $form_fields['islogo'] = array(
        'label' => 'Logo Image ?',
        'input' => 'html',
        'html' => "<input type='checkbox' {$checked} name='attachments[{$post->ID}][islogo]' id='attachments[{$post->ID}][islogo]' />",
        'value' => $islogo,
        'helps' => 'Should this image appear as a proposal Logo ?'
    );
    return $form_fields;

}
add_filter( 'attachment_fields_to_edit', 'attachment_fields_to_edit_islogoimage', null, 2 );

function attachment_fields_to_save_islogoimage($post, $attachment) {
    $islogo = ($attachment['islogo'] == 'on') ? '1' : '0';
    update_post_meta($post['ID'], '_islogo', $islogo);  
    return $post;  
}
add_filter( 'attachment_fields_to_save', 'attachment_fields_to_save_islogoimage', null, 2 );
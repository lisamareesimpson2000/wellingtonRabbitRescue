<?php
$metaboxes = array(
    'post_meta' => array(
        'title' => 'Extra Post Information',
        'post_type' => 'Adoption',
        'fields' => array(
            'image_url' => array(
                'title' => 'Image URL',
                'type' => 'text',
                'condition' => 'image'
            )
        )
    ),
    'page_meta' => array(
        'title' => 'Extra Adoption Information',
        'post_type' => 'page'
    ),
    'post_formats_meta' => array(
        'title' => 'Post Formats Feilds',
        'post_type' => 'post',
        'fields' => array(
            'image_url' => array(
                'title' => 'Image URL',
                'type' => 'text',
                'condition' => 'image'
            )
        )
    )
);


function create_custom_meta_boxes(){
    global $metaboxes;
    if(!empty($metaboxes)){
        foreach ($metaboxes as $metaboxID => $metabox) {
            add_meta_box($metaboxID, $metabox['title'], 'output_custom_meta_box', $metabox['post_type'],
            'normal', 'high', $metabox);
        };
    }
}
add_action('admin_init', 'create_custom_meta_boxes');


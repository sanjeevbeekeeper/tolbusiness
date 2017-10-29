<?php

/* =================================================
    Metabox
==================================================== */

function so_custom_meta_box($post){
    add_meta_box(
        'so_meta_box', // $id
        'Gender Selection',  // $title
        'gender_metabox_key', // $callback / metakey
        $post->post_type,
        'side' );
    }
add_action( 'add_meta_boxes', 'so_custom_meta_box' );


function so_save_metabox(){
    global $post;
    if(isset($_POST["custom_element_grid_class"])){
         //UPDATE:
        $meta_element_class = $_POST['custom_element_grid_class'];
        //END OF UPDATE

        update_post_meta($post->ID, 'gender_metabox_key', $meta_element_class);
        //print_r($_POST);
    }
}
add_action('save_post', 'so_save_metabox');

function gender_metabox_key($post){
    $meta_element_class = get_post_meta($post->ID, 'gender_metabox_key', true); //true ensures you get just one value instead of an array
    ?>
    <label>Choose the gender :  </label>

    <select name="custom_element_grid_class" id="custom_element_grid_class">
      <option value="empty" <?php selected( $meta_element_class, 'empty' ); ?>>-</option>
      <option value="Men" <?php selected( $meta_element_class, 'Men' ); ?>>Men</option>
      <option value="Women" <?php selected( $meta_element_class, 'Women' ); ?>>Women</option>
      <option value="Both" <?php selected( $meta_element_class, 'Both' ); ?>>Both</option>
    </select>
    <?php
}

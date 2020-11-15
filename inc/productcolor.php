<?php

/* =================================================
    Metabox
==================================================== */

function product_metadata() {
    add_meta_box( 'id_color', 'Product Color', 'product_color_callback', 'post', 'advanced', 'high');
    }

    function product_color_callback($post) {
        wp_nonce_field( 'productcolor_save_action', 'productcolor_nonce');
        $value = get_post_meta($post->ID, '_productcolor_key', true);
        // echo '<label for="product_color">Product color: </label>';
        echo '<input type="text" id="product_color" name="product-color" value="'.esc_attr ($value).'" size="25" />';
        }
    add_action('add_meta_boxes', 'product_metadata');

    // Product color
    function productcolor_save_action ( $post_id) {
        if ( ! isset($_POST['productcolor_nonce']) ) {
            return;
            }
        if ( ! wp_verify_nonce( $_POST['productcolor_nonce'], 'productcolor_save_action')) {
            return;
            }
        // if doing autosave, do not do anything - just return it
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
            return;
            }
        // user permission
        if ( ! current_user_can('edit_post', $post_id ) ) {
            return;
            }
        // if the label name is set, return
        if( ! isset($_POST['product-color'])) {
            return;
            }
        $my_data = sanitize_text_field($_POST['product-color']);
        update_post_meta($post_id,'_productcolor_key', $my_data );
        }
    add_action ('save_post', 'productcolor_save_action' );

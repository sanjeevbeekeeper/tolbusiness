<?php

/* =================================================
    Metabox
==================================================== */

function product_size_metadata() {
    add_meta_box( 'id_size', 'Product Size', 'product_size_callback', 'post', 'side', 'high');
    }

    function product_size_callback($post) {
        wp_nonce_field( 'productsize_save_action', 'productsize_nonce');

        $value = get_post_meta($post->ID, '_productsize_key', true);
        // echo '<label for="product_size">Product size: </label>';
        echo '<input type="text" id="product_size" name="product-size" value="'.esc_attr ($value).'" size="25" />';
        }
    add_action('add_meta_boxes', 'product_size_metadata');

    function productsize_save_action ( $post_id) {
        if ( ! isset($_POST['productsize_nonce']) ) {
            return;
            }
        if ( ! wp_verify_nonce( $_POST['productsize_nonce'], 'productsize_save_action')) {
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
        if( ! isset($_POST['product-size'])) {
            return;
            }
        $my_data = sanitize_text_field($_POST['product-size']);
        update_post_meta($post_id,'_productsize_key', $my_data );
        }

    add_action ('save_post', 'productsize_save_action' );

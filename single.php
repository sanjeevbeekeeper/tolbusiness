<?php get_header(); ?>
<!-- header -->

    <div class="single_container">
        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">
                <div class="row">
                    <!-- Featured image -->
                    <div class="col-lg-6 text-right">
                        <?php the_post_thumbnail('large'); ?>
                    </div> <!-- //.col -->

                    <!-- Meta container -->
                    <div class="col-lg-6">
                        <div class="position_container">
                            <div class="meta_container">
                                <div class="back-btn">
                                    <a href="<?php echo get_page_link( get_page_by_title( product )->ID ); ?>">Back to Gallery</a>
                                </div>

                                <?php
                                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                                    ?>

                                    <!-- code -->
                                    <?php the_title('<h4 class="page-header">', '</h4>'); ?>

                                    <!-- content -->
                                    <div class="content" style="color: red;">
                                        <!-- <?php the_content(); ?> -->
                                    </div>

                                    <!-- product name -->
                                    <p>
                                        <span>Product type: </span>
                                        <?php
                                            foreach((get_the_category()) as $category) {
                                                echo $category->cat_name . ' ';
                                                }
                                            ?>
                                    </p>

                                <!-- material -->
                                    <p>
                                        <!-- <span>Material: </span>
                                        <?php
                                            // $my_tags = get_the_tags();
                                            // if ( $my_tags ) {
                                                // foreach ( $my_tags as $tag ) {
                                                    // $tag_names[] = $tag->name;
                                                    // }
                                                // echo implode( ' / ', $tag_names );
                                                // }
                                            ?> -->
                                    </p>


                                <!-- color -->
                                <?php $color = get_post_meta($post->ID, '_productcolor_key', true); ?>
                                <p><span>Color:</span> <?php echo $color ?></p>

                                <?php $size = get_post_meta($post->ID, '_productsize_key', true); ?>
                                <!-- size -->
                                <!-- <p><span>Size (inches): </span> <?php //echo $size ?></p> -->
                                <!-- enquiry -->
                                <!-- END LOOP -->
                                <?php
                                    endwhile;
                                    else:
                                        _e('Sorry, no produtcs matched your criteria.');
                                    endif;
                                    ?>
                                <a href="<?php echo get_page_link( get_page_by_title( 'enquiry' )->ID ); ?>" class="btn btn-default">Enquiry</a>
                            </div>
                        </div>
                    </div> <!-- //.col -->


                </div> <!-- //.row -->
            </div>
        </div>
    </div>


<!-- footer -->
<?php get_footer(); ?>

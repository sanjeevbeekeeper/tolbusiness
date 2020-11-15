<?php get_header(); ?>
<!-- header -->

    <div class="single_container">
        <div class="row">

            <div class="product_container ">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="row">
                        <!-- Featured image -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="image_container"><?php the_post_thumbnail('large'); ?></div>
                        </div> <!-- //.col -->
                        <!-- Meta container -->
                        <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2">
                            <div class="position_container">
                                <div class="meta_container">
                                    <!-- <div class="back-btn">

                                    </div> -->

                                    <?php
                                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                                        ?>

                                        <!-- code -->
                                        <h4 class="page-header text-left">
                                            <?php the_title(); ?>
                                            <small class="pull-right"><a href="<?php echo get_page_link( get_page_by_title( product )->ID ); ?>">Back to Gallery </a></small>
                                        </h4>

                                        <!-- content -->
                                        <div class="content text-left">
                                            <?php the_content(); ?>
                                        </div>

                                        <div class="text-left">
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
                                                <span>Material: </span>
                                                <?php
                                                    $my_tags = get_the_tags();
                                                    if ( $my_tags ) {
                                                        foreach ( $my_tags as $tag ) {
                                                            $tag_names[] = $tag->name;
                                                            }
                                                        echo implode( ' / ', $tag_names );
                                                        }
                                                    ?>
                                            </p>

                                            <!-- color -->
                                            <?php $color = get_post_meta($post->ID, '_productcolor_key', true); ?>
                                            <p><span>Color:</span> <?php echo $color ?></p>

                                            <!-- product size -->
                                            <?php $size = get_post_meta($post->ID, '_productsize_key', true); ?>
                                            <p><span>Size (inches): </span> <?php echo $size ?></p>
                                        </div>
                                    <!-- enquiry -->
                                    <!-- END LOOP -->
                                    <?php
                                        endwhile;
                                        else:
                                            _e('Sorry, no produtcs matched your criteria.');
                                        endif;
                                        ?>
                                    <a href="<?php echo get_page_link( get_page_by_title( 'enquiry' )->ID ); ?>" class="btn btn-default">Enquiry</a>
                                </div> <!-- //.meta-container -->
                            </div>
                        </div> <!-- //.col -->

                    </div> <!-- //.row -->
                </div> <!-- //.col -->
            </div> <!-- //.product_container -->
        </div>
    </div>


<!-- footer -->
<?php get_footer(); ?>

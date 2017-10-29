<?php get_header(); ?>
<!-- header -->

    <div class="pages_container">
        <div class="blog_container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">

                    <div class="gender_container pull-right">
                        <!-- Women page -->
                        <a href="<?php echo get_page_link( get_page_by_title( women )->ID ); ?>">
                            <?php
                                wp_list_pages( array(
                                    // 'include'    => array(88), // Only page id's here. No Slugs
                                    'include'    => array(16), // Only page id's here. No Slugs
                                    'title_li'   => ''   // hide the title
                                    ));
                                ?>
                        </a>
                        <!-- Men page -->
                        <a href="<?php echo get_page_link( get_page_by_title( men )->ID ); ?>">
                            <?php
                                wp_list_pages( array(
                                    'include'    => array(14), // Only page id's here. No Slugs
                                    // 'include'    => array(90), // Only page id's here. No Slugs
                                    'title_li'   => ''   // hide the title
                                    ));
                                ?>
                        </a>
                    </div>

                    <h3 class="page-header">Gallery</h3>
                    <p class="description text-center">
                        We are offering a wide range of exclusive leather products for our valuable clientele. Our leather products are a perfect blend of finest quality raw material and versatile design line. Our products are durable, spacious and can withstand high wear &amp; tear.
                    </p>
                    <?php
                    $args=array(
                        'post_type' => 'post',
                        'posts_per_page' => 20,
                         'post_status' => 'publish',
                        );

                    $my_query = null;
                    $my_query = new WP_Query($args);

                    if( $my_query->have_posts() ) {
                        $i = 0;
                        while ($my_query->have_posts()) : $my_query->the_post();
                      //modified to work with 3 columns
                      //output an open <div>
                      if($i % 3 == 0)
                      {
                    ?>

                    <div class="row">
                        <?php
                        } // if($i % 3 == 0)
                        ?>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">

                            <!-- image -->
                            <!-- Featured Image -->
                            <?php the_post_thumbnail('medium'); ?>

                            <!-- <div class="image"></div> -->

                            <div class="meta_container">

                                <!-- code -->
                                <h4>
                                    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                                </h4>

                                <!-- names -->
                                <p>
                                    <?php
                                        foreach((get_the_category()) as $category) {
                                            echo $category->cat_name . ' ';
                                            }
                                        ?>
                                </p>

                                <div class="content">
                                    <!-- <?php the_content() ?> -->
                                </div>
                            </div>

                        </div> <!-- //.col -->

                        <!-- increment the loop BEFORE we test the variable -->
                        <?php $i++;
                            if($i != 0 && $i % 3 == 0)
                            {
                            ?>
                    </div> <!--//.row-->

                    <?php
                        } // $i++;
                        ?>

                    <?php
                        endwhile;
                        } // $my_query->have_posts()
                        wp_reset_query();
                        ?>
                </div> <!-- col -->
            </div> <!-- row -->
        </div> <!-- blog_container -->
    </div> <!-- pages_container -->
    <div class="clearfix"></div>

<!-- footer -->
<?php get_footer(); ?>

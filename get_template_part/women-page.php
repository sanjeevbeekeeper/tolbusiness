<div class="blog_container">
    <div class="back-btn">
        <a href="<?php echo get_page_link( get_page_by_title( product )->ID ); ?>">&laquo; Back to Gallery</a>
    </div>
    <h3 class="page-header">Leather bags for Women</h3>

    <?php
    $meta_query_args = [
        [
            'key'     => 'Gender',
            'value'   => [ 'Women', 'Both' ],
            'compare' => 'IN',
            ],
        ];
    $args=array(
        'post_type' => 'post',
        'posts_per_page' => 18,
        'post_status' => 'publish',
        'meta_query' => $meta_query_args,
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
                    <?php //the_content() ?>
                </div>
            </div>

      </div> <!-- // col -->

        <!-- increment the loop BEFORE we test the variable -->
        <?php $i++;
            if($i != 0 && $i % 3 == 0)
            {
            ?>
        </div> <!--/.row-->

    <?php
        } // $i++;
        ?>

    <?php
        endwhile;
        } // $my_query->have_posts()
        wp_reset_query();
        ?>
        <div class="clearfix"></div>
</div>

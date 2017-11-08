<div class="col-lg-4 col-md-4 col-sm-4 col-sm-offset-0 col-xs-12">

    <!-- image -->
    <!-- Featured Image -->
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('medium'); ?>

    <!-- <div class="image"></div> -->

    <div class="meta_container">

        <!-- code -->
        <h4>
            <?php the_title(); ?>
        </h4>
        </a>

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

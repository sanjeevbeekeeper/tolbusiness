<?php
/*
Template Name: Pages
*/
?>

<?php get_header(); ?>
<!-- header -->

<div class="row">

    <!-- main content -->
    <div class=" col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
    <!-- <div class="col-lg-8 col-lg-offset-2"> -->
        <div class="pages_container">

            <?php while ( have_posts() ) : the_post(); ?>

            <?php
                if  ( is_page('company') ) {
                    get_template_part( 'get_template_part/company', 'page' );
                    }
                elseif ( is_page('enquiry') ) {
                    get_template_part( 'get_template_part/enquiry', 'page' );
                    }
                elseif ( is_page('men') ) {
                    get_template_part( 'get_template_part/men', 'page' );
                    }
                elseif ( is_page('women') ) {
                    get_template_part( 'get_template_part/women', 'page' );
                    }
                ?>

            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
</div> <!-- row -->
<!-- Do not remove the 'clearfix' this is for the men and women page -->
<div class="clearfix"></div>

<!-- footer -->
<?php get_footer(); ?>

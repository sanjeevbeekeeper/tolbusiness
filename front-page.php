<?php get_header(); ?>
<!-- header -->

    <!-- cover image -->
    <div class="banner_container">
        <div class="coverimg" style="background-image: url(<?php header_image(); ?>);"></div>
    </div>

    <div class="homepage_container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

                <!-- description -->
                <article class="description text-center">
                    TOL (Think of Leather) is engaged in exporting an exquisite range of Genuine Leather Products. It is a process of us where we scrutinize the market to get quality leather made products so that to see the fulfillment of the end user and gets satisfaction out of it. We work in accordance to dynamic market and as per our valued clients’ requirements. We strive for excellence and thereby provide customer oriented products.
                </article>

                <!-- gallery -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2">

                        <!-- women handbag -->
                        <article class="leatherbag_container text-center">
                            <h3>
                                Leather bag for Women
                            </h3>
                            <p>
                                Leather bags and purses for women a must for both daily commutes and far-flung travels. Cool crossbodies, stylish satchels and carry-everywhere.
                            </p>

                            <a href="<?php echo get_page_link( get_page_by_title( women )->ID ); ?>" type="button" name="button" class="btn btn-tol">
                                Gallery
                            </a>
                        </article> <!-- leatherbag_container -->

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2">

                        <!-- men handbag -->
                        <article class="leatherbag_container text-center">
                            <h3>
                                Leather bag for Men
                            </h3>
                            <p>
                                Whether you’re traveling the globe or simply heading to the office. These collections are dependable essentials of the highest quality design.
                            </p>
                            <a href="<?php echo get_page_link( get_page_by_title( men )->ID ); ?>" type="button" name="button" class="btn btn-tol">
                                Gallery
                            </a>
                        </article> <!-- leatherbag_container -->
                    </div> <!-- //.col -->
                </div> <!-- //.row -->

            </div> <!-- //.col -->
        </div> <!-- //.row -->
    </div> <!-- //.homepag_container -->

<!-- footer -->
<?php get_footer(); ?>

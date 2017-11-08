
                <!-- footer -->
                <footer>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <nav>
                                <?php wp_nav_menu( $args ); ?>
                                <span class="small text-muted">
                                    Copyright <?php echo date('Y'); ?> &copy;
                                    tolbusiness.com. All rights reserved
                                </span>
                            </nav>
                        </div> <!--//.col-lg-6 -->
                        <div class="col-lg-6  col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <a href="http://www.beekeeperstudio.com/" target="_blank">
                                    <span class="small text-muted">Designed by</span>
                                    <img src="<?php bloginfo('template_directory'); ?>/resources/beekeeperstudio.png" alt="Beekeeper Studio Logo">
                                </a>
                            </div>
                        </div> <!--//.col-lg-6 -->
                    </div> <!--//.row -->
                </footer> <!--//footer -->

            </div> <!-- //.col closing -->
        </div> <!-- //.row closing -->
    </div> <!-- // .container-fluid -->
<?php wp_footer(); ?> <!-- script location -->
</body>
</html>

    <!-- Footer-Area -->
    <footer class="footer-area dark-footer">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="footer-text">
                            <h4><?php bloginfo( 'title' ); ?></h4>
                            <p><?php bloginfo( 'description' ); ?></p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <div class="footer-single">
                            <h4>Events</h4>
                            
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'happylife_event',
                                'menu_class'     => '',
                                'menu_id'        => '',
                                'container'      => ''
                            ) );
                            ?>
                            
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <div class="footer-single">
                            <h4>News</h4>

                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'happylife_blog',
                                'menu_class'     => '',
                                'menu_id'        => '',
                                'container'      => ''
                            ) );
                            ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="footer-single">
                            <h4>Social Media</h4>
                            <!-- <ul>
                                <a href="https://www.instagram.com/happylifesolution/"><i
                                        class="icofont icofont-social-instagram"> Instagram</i></a>
                            </ul> -->
                            <?php
                            // Display social media widgets
                            if ( is_active_sidebar( 'footer_social_media' ) ) {
                            ?>

                                <div>
                                    <?php
                                    dynamic_sidebar( 'footer_social_media' );
                                    ?>
                                </div>

                            <?php
                            }
                            ?>
                            
                        </div>
                        <div class="footer-single">
                            <h4>Company Address</h4>
                            <address>Jalan Achmad Wahid, Sampangan Kelurahan Baturetno, Yogyakarta</address>
                            <h4>Email</h4>
                            <span>halo@happylife.co.id</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    &copy;2019 - <?php echo date('Y'); ?> PT Solusi Hidup Bahagia, all rights reserved.
                </p>
            </div>
        </div>

    </footer>
    <!-- Footer-Area / -->
    <?php
    // Invoke the wordpress footer function 
    wp_footer();
    ?>
</body>

</html>
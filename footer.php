    <!-- Footer-Area -->
    <footer class="footer-area dark-footer">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <div class="footer-text">
                            <h4><?php bloginfo( 'title' ); ?></h4>
                            <p><?php bloginfo( 'description' ); ?></p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2 col-md-offset-1">
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
                    <div class="col-xs-6 col-md-2">
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
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4>Media</h4>
                            <ul>
                                <a href="https://www.instagram.com/happylifesolution/"><i
                                        class="icofont icofont-social-instagram"> Instagram</i></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <div class="footer-single">
                            <h4>About</h4>
                            <ul>
                                <li>halo@happylife.co.id</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    &copy;2019 - <?php echo date('Y'); ?> All rights reserved
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
<?php
/* 
 *
 * Template Name: Blog Page
 * 
 */

get_header();
?>

    <!-- Main-Content -->
    <main>
        
        <!-- Header-Blog -->
        <header class="jumbotron bg-happy">
            <div class="container small-container align-center font-white">
                <h1>HappyLife Blog</h1>
                <!-- <p>Where you can find all knowledge base in pursuit happiness</p>
                <form>
                    <div class="input-group mb-3">
                        <input type="text" placeholder="Find here.." class="form-control" />
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form> -->
            </div>
        </header>
        <!-- Header-Blog /-->

        <!-- Blog-Content -->
        <section>
            <div class="container">
                <span>Home / Blog</span>
                <div class="row blog-container">
                    <div class="col-md-8">
                        
                <?php

                // $args = array( 'posts_per_page' => 10 );
                $args = array( );
                $the_query = new WP_Query( $args );
                     
                if ( $the_query->have_posts() ) :

                    // Display all post here
                    while ( $the_query->have_posts() ) :
                        $the_query->the_post();
                ?>

                        <div class="news">
                            <h2><?php the_title( ); ?></h2>
                            <div class="news-meta">
                                <span>By <?php the_author( ); ?>, </span>
                                <span><?php the_date( ); ?></span>
                            </div>

                        <?php
                        if ( has_post_thumbnail( ) ) {
                        ?>
                            <figure>
                                <?php the_post_thumbnail( ); ?>
                            </figure>
                        <?php
                        }
                        else {
                        ?>
                            <figure>
                                <img src="<?php bloginfo( 'template_url' ); ?>/images/header-bg-2.jpg" alt="Gambar News">
                            </figure>
                        <?php
                        }
                        ?>

                            <?php
                            the_excerpt();
                            ?>

                        </div>

                <?php
                    endwhile;
                    wp_pagenavi();
                endif;

                wp_reset_postdata( );
                ?>

                    </div>

                    <?php
                    get_sidebar( );
                    ?>
                </div>
            </div>
        </section>
        <!-- Blog-Content / -->

    </main>
    <!-- Contact-Area / -->
    
<?php
// Include the footer section
get_footer();
?>
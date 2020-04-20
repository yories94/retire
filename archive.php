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
                <p>Where you can find all knowledge base</p>
                
                <?php
                // Get the search form
                get_search_form( );
                ?>

            </div>
        </header>
        <!-- Header-Blog /-->

        <!-- Blog-Content -->
        <section>
            <div class="grey-container">
                <div class="container">
                    <span>Home / Blog</span>
                </div>
            </div>
            <div class="container">
                <div class="row blog-container">
                    <div class="col-md-8">
                        
                        <div class="archive-desc">

                            <?php
                            $info = "";

                            if ( is_category( ) ) {
                                $info = "Posts in category: <span class='bold-archive-desc'>" . single_cat_title( '', false ) 
                                . "</span>";
                            } else if ( is_archive( ) ) {
                                $info = "Posts in archive: <span class='bold-archive-desc'>" . get_the_date( ) . "</span>";
                            } else if ( is_author( ) ) {
                                $info = "Posts in Author: <span class='bold-archive-desc'>" . get_the_author( ) . "</span>";
                            }
                            echo $info;
                            ?>

                        </div>

                    <?php

                    // Display all post here
                    while ( have_posts() ) :
                        the_post();
                    ?>

                        <a href="<?php the_permalink( ); ?>" class="news">
                            <div class="section-1">
                            
                            <?php
                            if ( has_post_thumbnail( ) ) {
                            ?>
                                <figure>
                                    <?php the_post_thumbnail( ); ?>
                                </figure>
                            <?php
                            }
                            ?>
                            
                            </div>
                            <div class="section-2">
                                <h2><?php the_title( ); ?></h2>
                                <div class="news-meta">
                                    <span><i class="icofont-business-man"></i> <?php the_author( ); ?></span> | <span><i class="icofont-calendar"></i> <?php the_date( 'j F Y' ); ?></span>
                                </div>

                            <?php
                            the_excerpt( );
                            ?>
                            </div>
                        </a>

                    <?php
                    endwhile;
                    wp_pagenavi();
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
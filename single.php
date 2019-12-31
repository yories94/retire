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
                
                <?php get_search_form( ); ?>

            </div>
        </header>
        <!-- Header-Blog /-->

        <!-- Blog-Content -->
        <section>
            <div class="container">
                <div class="row blog-container">
                    <div class="col-md-8">
                        
                    <?php
                    
                    // Display all post here
                    while ( have_posts() ) :
                        the_post();
                    ?>

                        <div class="news-read">
                            <h2><?php the_title( ); ?></h2>
                            <div class="news-meta">
                                <span><?php the_author( ); ?></span>
                                <span><?php the_date( ); ?></span>
                            </div>

                        <?php
                        if ( has_post_thumbnail( ) ) {
                        ?>
                            <figure class="news-thumbnail">
                                <?php the_post_thumbnail( ); ?>
                            </figure>
                        <?php
                        }
                        ?>

                        <?php
                        the_content();
                        ?>

                        </div>

                    <?php
                    endwhile;
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
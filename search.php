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
            <div class="grey-container">
                <div class="container">
                    <span>Home / Blog</span>
                </div>
            </div>
            <div class="container">
                <div class="row blog-container">
                    <div class="col-md-8">
                        <div class="archive-desc">
                            Search results for: 
                            <span class="bold-archive-desc">
                                <?php echo get_search_query( ); ?>
                            </span>
                        </div>
                    
                    <?php

                    if ( have_posts( ) ) :
                        // Display all post here
                        while ( have_posts( ) ) :
                            the_post();
                    ?>

                        <div class="news">
                            <h2><?php the_title( ); ?></h2>
                            <div class="news-meta">
                                <span><i class="icofont-business-man"></i> <?php the_author( ); ?></span>
                                <span><i class="icofont-calendar"></i> <?php the_date( 'j F Y' ); ?></span>
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
                        the_excerpt();
                        ?>

                            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg btn-center">Read More</a>
                        </div>

                    <?php
                        endwhile;
                        wp_pagenavi();
                    ?>

                    </div>

                    <?php
                    else:
                    ?>
                        <p class="post-not-found">
                            Sorry, we don't have post(s) with word or title 
                            '<?php echo get_search_query( ); ?>'
                        </p>
                    <?php
                    endif;
                    ?>
                    <?php get_sidebar( ); ?>
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
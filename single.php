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
            
            <?php        
            // Display all post here
            while ( have_posts() ) :
                the_post();
            ?>

            <div class="grey-container">
                <div class="container">
                    <span>Home / Blog / <?php the_title(); ?></span>
                </div>
            </div>
            <div class="container">
                <div class="row blog-container">
                    <div class="col-md-8">

                        <div class="news-read">
                            <h1><?php the_title( ); ?></h1>
                            <div class="news-meta-read">
                                <span><i class="icofont-business-man"></i> <?php the_author( ); ?></span> | <span><i class="icofont-calendar"></i> <?php the_date( 'j F Y' ); ?></span>
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

                            <article>
                                <?php
                                the_content();
                                ?>
                            </article>

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
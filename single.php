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
                            <h2><?php the_title( ); ?></h2>
                            <div class="news-meta">
                                <span><i class="icofont-business-man"></i> <?php the_author( ); ?></span> | <span><i class="icofont-calendar"></i> <?php the_date( 'j F Y' ); ?></span>
                            </div>
                            <div class="excerpt-section">
                                <?php
                                // display excerpt of post from yoast
                                $meta = get_post_meta( get_the_ID( ),'_yoast_wpseo_metadesc', true );
                                if ( ! empty( $meta ) ) {
                                    echo $meta;
                                }

                                // display custom excerpt if available
                                if ( has_excerpt( ) ) {
                                    the_excerpt( );
                                }
                                ?>
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
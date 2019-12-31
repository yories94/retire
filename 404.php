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

        <!-- Blog-Content -->
        <section>
            <div class="container">
                <div class="content-404">
                    <h1>Page/Post Not Found</h1>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'retire' ); ?></p>
					<?php get_search_form(); ?>
                </div>
            </div>
        </section>
        <!-- Blog-Content / -->

    </main>
    <!-- Main-Content / -->
    
<?php
// Include the footer section
get_footer();
?>
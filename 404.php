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
                    <h1>Halaman/Halaman Post Tidak Ketemu</h1>
                    <p><?php _e( 'Sepertinya konten tidak ada disini. Gunakan filter pencarian dibawah ini untuk cari artikel.', 'retire' ); ?></p>
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
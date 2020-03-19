<?php
/* 
 *
 * Template Name: Main Page
 * 
 */

get_header();
?>

        <!-- Header-picture -->
        <header class="happy-header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 happy-header-img happy-header-text">
                        <h1>Kami Menyediakan Program Persiapan Pensiun</h1>
                        <p>Kami memberikan solusi pensiun terbaik untuk klien kami.</p>
                        <a href="#contact-us" class="happy-button-cta">Contact Us</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header-picture /-->

        <main>
            <div class="about-us">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-4 company-image">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/asset_rumah.png" class="img-fluid">
                        </div>
                        <div class="col-lg-6 about-us-text">
                            <h2>Persiapan Pensiun Merupakan Hal Wajib</h2>
                            <p>Pensiun bukan ujung dari suatu jalan, tetapi merupakan awal dari jalan yang lebih luas. MPP bukanlah akhir dari segalanya, tetapi segala hal membutuhkan persiapan dari segi finansial, mental, fisik, gaya hidup dan sesuai dengan keinginan untuk memilih jalur yang diminati.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="padding-top-med padding-bottom-med promote-section">
                <div class="container">
                    <h2>Why Choose Us?</h2>
                    <div class="row blue-border-bottom">
                        <div class="col-md-5">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/asset_org_kedua.png" class="img-fluid">
                        </div>
                        <div class="offset-md-1 col-md-6 promote-right">
                            <h3>Kita Harus Mengubah Metode Persiapan Pensiun</h3>
                            <p>Pensiun adalah sebuah kepastian sehingga dibutuhkan persiapan sebaik mungkin sebelum masanya tiba. Persiapan-persiapan ini bisa dibuat sedemikian rupa agar pekerja dapat memilih tipe pensiun seperti apa yang diinginkan. Sebagai tambahan, perusahaan akan mendapatkan imej baik karena pekerja bisa mandiri dan berkembang setelah pensiun.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 promote-left">
                            <h3>Kita Harus Mengubah Metode Persiapan Pensiun</h3>
                            <p>HappyLife menyediakan solusi inovatif untuk Program Persiapan Pensiun. Peserta akan diberikan kesempatan untuk menyiapkan pensiun sesuai dengan potensi dan minat masing-masing, dengan kemampuan yang cukup agar dapat mandiri.</p>
                        </div>
                        <div class="offset-md-1 col-md-5">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/asset_org_ketiga.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="categories-section padding-top-med padding-bottom-med">
                <div class="container">

                <?php
                // Get all categories
                $categories = get_categories( );
                ?>

                    <h2>Categories</h2>

                    <div class="row category-boxes">

                    <?php
                    foreach ( $categories as $kategori ):
                    ?>

                        <div class="col-lg-2 col-md-2 box">
                            <a href="<?php echo get_category_link( $kategori->cat_ID ); ?>" class="box-link">
                                <?php echo $kategori->cat_name; ?>
                            </a>
                        </div>

                    <?php
                    endforeach;
                    ?>

                    </div>

                    <div class="slider categories-carousel">

                    <?php
                    foreach ( $categories as $kategori ):
                    ?>

                        <div class="item-category">
                            <a href="<?php echo get_category_link( $kategori->cat_ID ); ?>" class="box-carousel">
                                <?php echo $kategori->cat_name; ?>
                            </a>
                        </div>

                    <?php
                    endforeach;
                    ?>

                    </div>
                </div>
            </div>

            <div class="company-contact-address padding-top-med padding-bottom-med">
                <div class="container">
                    <div class="row">
                        <div id="contact-us" class="col-md-6">
                            <?php wpforms_display( '60' ); ?>
                        </div>
                        <div class="offset-md-1 col-md-5">
                            <div class="company-address">
                                <h3>Company Address</h3>
                                <address>Jalan Achmad Wahid, Sampangan Kelurahan Baturetno Yogyakarta</address>
                                <h3>Email</h3>
                                <span>halo@happlife.co.id</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
<?php
// Include the footer section
get_footer();
?>
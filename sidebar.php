<div class="col-md-4">
<?php
// Display sidebar with widgets
if ( is_active_sidebar( 'blog_sidebar' ) ) {
?>
    <div>
        <?php
        dynamic_sidebar( 'blog_sidebar' );
        ?>
    </div>
<?php
}
?>
</div>
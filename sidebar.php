<div class="offset-md-1 col-md-3">
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
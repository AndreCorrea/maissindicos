<?php
get_header();
$col= 'col-md-12';
?>
<div class="row">
    <div id="content" class="site-content <?php echo $col; ?>" role="main">
        <?php /* The loop */ ?>
        <?php if(have_posts()){ while ( have_posts() ) { the_post(); ?>
        <?php get_template_part( 'post-templates/content-servicos', get_post_format() ); ?>
        <?php } } ?>
    </div><!--/#content -->
    <?php get_sidebar(); ?>
</div>
<?php get_footer();


<?php get_header(); ?>

<?php if(have_posts()) :?>
    <?php while (have_posts()) :the_post() ;?>

    <?php echo post_custom('day'); ?>
    <div class="container">
    <div class="row">
        <div class="col-12 text-center">
    <?php the_title(); ?>
    <?php the_content(); ?>
    </div>
    </div>
    </div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
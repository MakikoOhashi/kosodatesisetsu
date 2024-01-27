
<img style="height:100px; margin-bottom:-100px;" src="<?php echo get_template_directory_uri(); ?>/1194.png" alt="">
<?php get_header(); ?>
<br><br>
<div class="container">
      
        <div class="row">
            <div class="col-12 col-lg-10">
          <h1><?php the_title();?></h1>

          <hr>
         
          <?php if (have_posts()): ?>
            <?php while (have_posts()):the_post(); ?>
              <?php the_content();?>
            <?php endwhile; ?>
          <?php endif; ?>

          <hr>   
            </div>
          <div class="col-12 col-lg-2 py-5 mx-8 text-center">
            <?php get_sidebar(); ?>

          </div>

        </div>
</div>

<?php get_footer();?>
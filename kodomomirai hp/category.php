<?php get_header(); ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10">
                <div class="header_info"><h1>
                    <?php
                    $cat = get_the_category();
                    $catslug = $cat[0]->slug;
                    $catname = $cat[0]->cat_name;
                    ?>
                    <div><?php echo $catslug; ?></div>
                    <div><?php echo $catname; ?></div>
                </h1></div>

                <?php if (have_posts()) :?>
                    <?php while(have_posts()) : the_post(); ?>
                <div class="details">
                    <hr>
                    <?php echo get_post_time('Y-m-d'); ?>
                    <br>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <ul><li>
                        <?php echo wp_trim_words( get_the_content() , 100, '...'); ?>
                    </li></ul>
                    <button type="button" class="btn btn-primary">詳細を見る</button>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                                   
            </div>

            


            <div class="col-12 col-lg-2 py-5 mx-8 text-center">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>
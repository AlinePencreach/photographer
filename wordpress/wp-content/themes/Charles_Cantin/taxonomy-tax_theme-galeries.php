<?php get_header() ?>



<div class="container text-center  p-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container ">
                <?php the_content(); ?>
            </div>
    <?php endwhile;
    endif; ?>
</div>



<?php get_footer() ?>
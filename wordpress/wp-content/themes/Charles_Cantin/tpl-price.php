<?php

/* Template Name: Modèle page tarifs et prestations */

get_header() ?>

<?php get_header() ?>

<div class="d-flex justify-content-center">
<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="site__prestations col-md-6 col-lg-4 p-4 bg-primary m-1">


            <h2 class="prestation__title text-center">

                <?php the_title(); ?>

            </h2>
            
            <div class="mt-3">
            <?php the_content(); ?>
            </div>

            <div class="text-center">
            <?php the_field('prix'); ?>
            <?php the_field('prix_sur_mesure'); ?>
            </div>
        </div>


<?php endwhile;
endif; ?>
</div>
</div>




<?php get_footer() ?>


<?php get_footer() ?>

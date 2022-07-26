<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arapey&family=Poiret+One&family=Pridi:wght@200&display=swap" rel="stylesheet">


    <title> Charles Cantin - <?php the_title() ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>


    <!-- Placement du hook body_open  -->
    <?php wp_body_open(); ?>


    <header>
    
   

        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container-fluid d-flex align-items-center">
                <!-- Brand and toggle get grouped for better mobile display -->

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#D3E4EC" class="bi bi-list fs-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

                <a class="navbar-brand ms-xl-5" href="<?php echo home_url('/'); ?>">Charles Cantin</a>

                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'main',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse text-end me-xl-5 position-lg-absolute',
                    'container_id'    => 'navbarSupportedContent',
                    'menu_class'      => 'navbar-nav',
                    // 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    // 'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </nav>


      <div class="facebook fixed">
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg>
        </a>
      </div>
    </header>


        


     
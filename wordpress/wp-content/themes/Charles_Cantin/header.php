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

<body style="background-color: #404A53; color: #E0DBDB;" class="m-0" <?php body_class(); ?>>
    
    
    <!-- Placement du hook body_open  -->
    <?php wp_body_open(); ?>
    
    <header class="header-img">
        <img class="logo d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">

        <!-- NAVABAR-->
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand fs-2" href="<?php echo home_url('/'); ?>">Charles Cantin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="tpl-home.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/galerie/">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tpl-price.php">Prestation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tpl-contact.php">Contact</a>
                        </li>

                </div>
            </div>
        </nav>
       
    </header>
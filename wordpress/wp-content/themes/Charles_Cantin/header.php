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

<body style="background-color: #404A53; color: #E0DBDB;" <?php body_class(); ?>>


    <!-- Placement du hook body_open  -->
    <?php wp_body_open(); ?>

    <header class="header-img">
        <img class="logo d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">



        <!-- NAVABAR-->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex align-items-center">

                <a class="navbar-brand ms-xl-5" href="<?php echo home_url('/'); ?>">Charles Cantin</a>

                <!-- ce qu'on voit en petit écran -->
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#D3E4EC" class="bi bi-list fs-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

                <!-- ce qu'on voit en grand écran -->
                <div class="collapse navbar-collapse text-end me-xl-5 position-lg-absolute" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 me-1">
                        <li class="nav-item pe-lg-5">
                            <a style="color: #E0DBDB;" class="nav-link active" aria-current="page" href="<?php get_template_directory_uri() . 'tpl-home' ?>">Accueil</a>
                        </li>
                        <li class="nav-item pe-lg-5">
                            <a style="color: #E0DBDB;" class="nav-link" href="<?php get_template_directory_uri() . 'tpl-galery' ?>">Galerie</a>
                        </li>
                        <li class="nav-item pe-lg-5">
                            <a style="color: #E0DBDB;" class="nav-link" href="<?php get_template_directory_uri() . 'tpl-price' ?>">Prestation</a>
                        </li>
                        <li class="nav-item pe-lg-5">
                            <a style="color: #E0DBDB;" class="nav-link" href="<?php get_template_directory_uri() . 'tpl-contact' ?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="about d-none d-lg-block">
            <a href="#home_page">
                <svg width="74" height="215" viewBox="0 0 74 215" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35 189.96L35 198.16H34.28V195.56L26.56 198.36L26.56 207.16L34.28 209.96V207.36H35V213.4H34.28V211.92C34.28 211.547 34.0933 211.293 33.72 211.16L9.8 202.36V201L33.72 192.2C34.0933 192.067 34.28 191.813 34.28 191.44V189.96H35ZM14.52 202.72L25.44 206.72L25.44 198.76L14.52 202.72ZM42.36 156.704H19C18.6267 156.704 18.44 156.89 18.44 157.264V159.144H17.72V157.184C17.72 155.584 17.64 154.464 17.48 153.824L23.08 153.824C21.16 153.37 19.7067 152.65 18.72 151.664C17.7333 150.65 17.24 149.53 17.24 148.304C17.24 146.624 18.08 145.144 19.76 143.864C21.44 142.584 23.6667 141.944 26.44 141.944C29.2133 141.944 31.4133 142.677 33.04 144.144C34.6667 145.584 35.48 147.477 35.48 149.824C35.48 151.29 35.12 152.624 34.4 153.824H42.36C42.7333 153.824 42.92 153.637 42.92 153.264L42.92 150.584H43.64L43.64 159.144H42.92V157.264C42.92 156.89 42.7333 156.704 42.36 156.704ZM26.52 144.984C24.04 144.984 22.1333 145.37 20.8 146.144C19.44 146.917 18.76 147.904 18.76 149.104C18.76 150.277 19.5467 151.357 21.12 152.344C22.6933 153.33 24.96 153.824 27.92 153.824H33.32C34.0933 152.65 34.48 151.37 34.48 149.984C34.48 148.57 33.7733 147.384 32.36 146.424C30.9467 145.464 29 144.984 26.52 144.984ZM17.24 118.544C17.24 117.504 17.68 116.664 18.56 116.024C19.44 115.357 20.5467 115.024 21.88 115.024C23.2133 115.024 23.88 115.57 23.88 116.664C23.88 117.304 23.68 117.824 23.28 118.224C22.5067 117.877 21.72 117.704 20.92 117.704C19.5067 117.704 18.8 118.29 18.8 119.464C18.8 120.45 19.6267 121.33 21.28 122.104C22.9067 122.85 25.28 123.224 28.4 123.224H33.72C34.0933 123.224 34.28 123.037 34.28 122.664V119.984H35V128.544H34.28V126.664C34.28 126.29 34.0933 126.104 33.72 126.104H19C18.6267 126.104 18.44 126.29 18.44 126.664V128.544H17.72V126.584C17.72 124.984 17.64 123.864 17.48 123.224H22.6C20.76 122.797 19.4133 122.17 18.56 121.344C17.68 120.517 17.24 119.584 17.24 118.544ZM33.04 100.996C31.4133 102.489 29.1867 103.236 26.36 103.236C23.5333 103.236 21.3067 102.489 19.68 100.996C18.0533 99.5026 17.24 97.5559 17.24 95.1559C17.24 92.7559 18.0533 90.8092 19.68 89.3159C21.3067 87.7959 23.5333 87.0359 26.36 87.0359C29.1867 87.0359 31.4133 87.7959 33.04 89.3159C34.6667 90.8092 35.48 92.7559 35.48 95.1559C35.48 97.5559 34.6667 99.5026 33.04 100.996ZM20.36 98.7559C21.8267 99.7159 23.8267 100.196 26.36 100.196C28.8933 100.196 30.9067 99.7159 32.4 98.7559C33.8667 97.7959 34.6 96.5959 34.6 95.1559C34.6 93.7159 33.8667 92.5159 32.4 91.5559C30.9067 90.5692 28.8933 90.0759 26.36 90.0759C23.8267 90.0759 21.8267 90.5692 20.36 91.5559C18.8667 92.5159 18.12 93.7159 18.12 95.1559C18.12 96.5959 18.8667 97.7959 20.36 98.7559ZM42.36 71.7818H19C18.6267 71.7818 18.44 71.9685 18.44 72.3418V74.2218H17.72V72.2618C17.72 70.6618 17.64 69.5418 17.48 68.9018H23.08C21.16 68.4485 19.7067 67.7285 18.72 66.7418C17.7333 65.7285 17.24 64.6085 17.24 63.3818C17.24 61.7018 18.08 60.2218 19.76 58.9418C21.44 57.6618 23.6667 57.0218 26.44 57.0218C29.2133 57.0218 31.4133 57.7552 33.04 59.2218C34.6667 60.6618 35.48 62.5552 35.48 64.9018C35.48 66.3685 35.12 67.7018 34.4 68.9018H42.36C42.7333 68.9018 42.92 68.7152 42.92 68.3418V65.6618H43.64L43.64 74.2218H42.92V72.3418C42.92 71.9685 42.7333 71.7818 42.36 71.7818ZM26.52 60.0618C24.04 60.0618 22.1333 60.4485 20.8 61.2218C19.44 61.9952 18.76 62.9818 18.76 64.1818C18.76 65.3552 19.5467 66.4352 21.12 67.4218C22.6933 68.4085 24.96 68.9018 27.92 68.9018H33.32C34.0933 67.7285 34.48 66.4485 34.48 65.0618C34.48 63.6485 33.7733 62.4618 32.36 61.5018C30.9467 60.5418 29 60.0618 26.52 60.0618ZM33.04 41.5818C31.4133 43.0752 29.1867 43.8218 26.36 43.8218C23.5333 43.8218 21.3067 43.0752 19.68 41.5818C18.0533 40.0885 17.24 38.1418 17.24 35.7418C17.24 33.3418 18.0533 31.3952 19.68 29.9018C21.3067 28.3818 23.5333 27.6218 26.36 27.6218C29.1867 27.6218 31.4133 28.3818 33.04 29.9018C34.6667 31.3952 35.48 33.3418 35.48 35.7418C35.48 38.1418 34.6667 40.0885 33.04 41.5818ZM20.36 39.3418C21.8267 40.3018 23.8267 40.7818 26.36 40.7818C28.8933 40.7818 30.9067 40.3018 32.4 39.3418C33.8667 38.3818 34.6 37.1818 34.6 35.7418C34.6 34.3018 33.8667 33.1018 32.4 32.1418C30.9067 31.1552 28.8933 30.6618 26.36 30.6618C23.8267 30.6618 21.8267 31.1552 20.36 32.1418C18.8667 33.1018 18.12 34.3018 18.12 35.7418C18.12 37.1818 18.8667 38.3818 20.36 39.3418ZM24.16 9.20778L25.72 5.04778C26.0933 4.06111 26.6667 3.31444 27.44 2.80778C28.1867 2.27444 29.0267 2.00778 29.96 2.00778C31.4 2.00778 32.68 2.58111 33.8 3.72778C34.92 4.87444 35.48 6.42111 35.48 8.36778C35.48 10.2878 35.12 12.1011 34.4 13.8078C33.76 13.6478 32.64 13.5678 31.04 13.5678H29.44V12.8478L31.52 12.5678C33.52 12.3278 34.52 10.9278 34.52 8.36778C34.52 7.22111 34.1733 6.27444 33.48 5.52778C32.76 4.75444 31.9467 4.36778 31.04 4.36778C29.7867 4.36778 28.88 5.12778 28.32 6.64778L26.76 10.8078C26.4133 11.7411 25.8667 12.4478 25.12 12.9278C24.3733 13.4078 23.5333 13.6478 22.6 13.6478C21.1867 13.6478 19.9467 13.1411 18.88 12.1278C17.7867 11.1144 17.24 9.84778 17.24 8.32778C17.24 6.78111 17.6 5.04778 18.32 3.12778C18.96 3.28778 20.08 3.36778 21.68 3.36778H23.28V4.08778L21.2 4.36778C19.28 4.58111 18.32 5.79444 18.32 8.00778C18.32 8.99444 18.6267 9.80778 19.24 10.4478C19.8533 11.0878 20.5733 11.4078 21.4 11.4078C22.68 11.4078 23.6 10.6744 24.16 9.20778Z" fill="#E0DBDB" />
                    <path d="M61.4393 214.091C62.0251 214.677 62.9749 214.677 63.5607 214.091L73.1066 204.545C73.6924 203.959 73.6924 203.009 73.1066 202.424C72.5208 201.838 71.5711 201.838 70.9853 202.424L62.5 210.909L54.0147 202.424C53.4289 201.838 52.4792 201.838 51.8934 202.424C51.3076 203.009 51.3076 203.959 51.8934 204.545L61.4393 214.091ZM61 5.9698L61 213.03H64L64 5.9698H61Z" fill="#E0DBDB" />
                </svg>
            </a>
        </div>

        <div class="facebook fixed">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
            </a>
        </div>
    </header>
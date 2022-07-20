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
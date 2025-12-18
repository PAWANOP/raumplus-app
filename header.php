<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raumplus - Premium Interior Solutions</title>
    <!-- Local Bootstrap 5 CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Local Font Awesome CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
    <!-- <link href="assets/css/font.css" rel="stylesheet"> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&display=swap"
        rel="stylesheet">
    <!-- Animate.css for Animations -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css" rel="stylesheet">
    <!-- Owl Carousels -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css">

    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <?php
    wp_head();
    ?>
</head>

<body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="https://demo.raumplus.co.in/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/raumplus-india.svg" alt="Raumplus Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mi-auto">
                    <li class="nav-item dropdown megamenu">
                        <a class="nav-link dropdown-toggle" href="#" id="productsMenu" role="button"
                            aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu megamenu-content" aria-labelledby="productsMenu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h6 class="megamenu-title"> <a href="/templates/roomDivider.html"> Room Divider</a></h6>
                                        <ul class="list-unstyled">
                                            <li><a href="/templates/detail/room-divider-single.html" class="dropdown-item">Sliding Room Divider</a></li>
                                            <li><a href="/templates/detail/room-divider-single.html" class="dropdown-item">Glass Room Divider </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="megamenu-title"> <a href="/templates/slide-doors.html">Sliding Doors</a></h6>
                                        <ul class="list-unstyled">
                                            <li><a href="/templates/detail/sliding-doors-single.html" class="dropdown-item">Sliding Dedroom Door</a></li>
                                            <li><a href="/templates/detail/sliding-doors-single.html" class="dropdown-item">sliding wardrobe door</a></li>
                                            <li><a href="/templates/detail/sliding-doors-single.html" class="dropdown-item">sliding partition door</a></li>
                                            <li><a href="/templates/detail/sliding-doors-single.html" class="dropdown-item">sliding folding door</a></li>
                                            <li><a href="/templates/detail/sliding-doors-single.html" class="dropdown-item">modern sliding door</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="megamenu-title"> <a href="/templates/door-ideas.html">Door Solutions </a></h6>
                                        <ul class="list-unstyled">
                                            <li><a href="/templates/door-ideas.html#pivot-door" class="dropdown-item">Pivot doors</a></li>
                                            <li><a href="/templates/detail/door-ideas-single.html" class="dropdown-item">folding door</a></li>
                                            <li><a href="/templates/detail/door-ideas-single.html" class="dropdown-item">hinge doors</a></li>
                                            <li><a href="/templates/detail/door-ideas-single.html" class="dropdown-item">room door</a></li>
                                            <li><a href="/templates/detail/door-ideas-single.html" class="dropdown-item">imported door</a></li>
                                            <li><a href="/templates/detail/door-ideas-single.html" class="dropdown-item">Sliding Doors</a></li>
                                            <li><a href="/templates/detail/door-ideas-single.html" class="dropdown-item">folding partition door</a></li>
                                            <li><a
                                                    href="/templates/detail/swingDoorSlimLine.html"
                                                    class="dropdown-item">Slimline Swing Door</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="megamenu-title"> <a href="/templates/partitionWalls.html">Partition Walls </a></h6>
                                        <ul class="list-unstyled">
                                            <li><a href="/templates/detail/partition-walls-single.html" class="dropdown-item">room partition Wall</a></li>
                                            <li><a href="/templates/detail/partition-walls-single.html" class="dropdown-item">living room partition wall</a></li>
                                            <li><a href="/templates/detail/partition-walls-single.html" class="dropdown-item">glass partition wall</a></li>
                                            <li><a href="/templates/detail/partition-walls-single.html" class="dropdown-item">folding partition wall</a></li>
                                            <li><a href="/templates/detail/partition-walls-single.html" class="dropdown-item">sliding partition wall</a></li>
                                            <li><a href="/templates/detail/partition-walls-single.html" class="dropdown-item">bedroom partition wall</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h6 class="megamenu-title"> <a href="templates/wardrobeShelves.html"> Wardrobe Planning </a></h6>
                                        <ul class="list-unstyled">
                                            <li><a href="templates/wardrobeShelves.html#importedShelves?=content-14" class="dropdown-item">Synchro Mechanism</a></li>
                                            <li><a href="templates/wardrobeShelves.html#importedShelves?=content-15" class="dropdown-item">Uno</a></li>
                                            <li><a href="templates/wardrobeShelves.html#importedShelves?=content-16" class="dropdown-item">Rima Fina</a></li>
                                            <li><a href="templates/wardrobeShelves.html#importedShelves?=content-17" class="dropdown-item">Ecoline</a></li>
                                            <li><a href="templates/wardrobeShelves.html#importedShelves?=content-18" class="dropdown-item">Legno</a></li>
                                            <li><a href="templates/wardrobeShelves.html#importedShelves?=content-19" class="dropdown-item">Apperia</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu Wardrobes">
                        <a class="nav-link dropdown-toggle" href="/templates/wardrobeDesigns.html" id="solutionsMenu" role="button" aria-expanded="false">
                            Wardrobes
                        </a>
                        <div class="dropdown-menu megamenu-content" aria-labelledby="solutionsMenu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <ul class="list-unstyled">
                                            <li><a href="/templates/detail/wardrobe-single.html" class="dropdown-item">walk in wardrobe</a></li>
                                            <li><a href="/templates/detail/wardrobe-single.html" class="dropdown-item">hinge wardrobes</a></li>
                                            <li><a href="/templates/detail/wardrobe-single.html" class="dropdown-item">sliding wardrobes</a></li>
                                            <li><a href="/templates/detail/wardrobe-single.html" class="dropdown-item">imported wardrobe</a></li>
                                            <li><a href="/templates/detail/wardrobe-single.html" class="dropdown-item">sloping back wardrobe</a></li>
                                            <li><a href="/templates/wardrobeAccessories.html" class="dropdown-item">Wardrobe Accessories</a></li>
                                            <li><a href="/templates/detail/wardrobe-single.html" class="dropdown-item">built in wardrobes</a></li>
                                            <li><a href="/templates/detail/wardrobe-single.html" class="dropdown-item">corner wardrobes</a></li>
                                            <li><a href="/templates/wardrobeShelves.html" class="dropdown-item">Wardrobes & Shelves</a></li>
                                            <li><a href="/templates/wardrobeSloping.html" class="dropdown-item">Wardrobes in Sloping Ceilings</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu aboutUs">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutUs" role="button" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu megamenu-content" aria-labelledby="aboutUs">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="megamenu-title"> <a href="/templates/aboutUs.html"> Company</a></h6>
                                        <ul class="list-unstyled">
                                            <li><a href="/templates/aboutUs.html#philosophy" class="dropdown-item">Philosophy</a></li>
                                            <li><a href="/templates/aboutUs.html#history" class="dropdown-item">History </a></li>
                                            <li><a href="/templates/aboutUs.html#fact_figure" class="dropdown-item">Facts & Figures </a></li>
                                            <li><a href="/templates/aboutUs.html#cooperation" class="dropdown-item">Cooperations </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h6 class="megamenu-title"> <a href="/templates/virtual-world-360.html"> Virtual world</a></h6>
                                        <ul class="list-unstyled">
                                            <li><a href="/templates/virtual-world-360.html" class="dropdown-item">360° raumplus house</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h6 class="megamenu-title"> <a href="/templates/projects/Benefits.html"> Benefits</a></h6>
                                        <ul class="list-unstyled">
                                            <li><a href="/templates/projects/Benefits.html" class="dropdown-item">Overview</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h6 class="megamenu-title"> <a href="/templates/projects/Quality.html"> Quality </a></h6>
                                        <ul class="list-unstyled">
                                            <li><a href="/templates/projects/Quality.html#madeGerman" class="dropdown-item">Made In Germany</a></li>
                                            <li><a href="/templates/projects/Quality.html#quality" class="dropdown-item">Quality</a></li>
                                            <li><a href="/templates/projects/Quality.html#award" class="dropdown-item">Awards</a></li>
                                            <li><a href="/templates/projects/Quality.html#testimonials" class="dropdown-item">Testimonials</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h6 class="megamenu-title"> <a href="/templates/projects/References.html"> References </a></h6>
                                        <ul class="list-unstyled">
                                            <li><a href="/templates/projects/References.html" class="dropdown-item">Project overview</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown fullHomeFurniture">
                        <a class="nav-link dropdown-toggle" href="/templates/detail/wardrobePlanning.html">
                            Wardrobe Planning
                        </a>
                        <div class="dropdown-menu megamenu-content" aria-labelledby="furniture">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-unstyled">
                                            <li><a href="/templates/detail/wardrobePlanning.html#inspiration" class="dropdown-item">Material Inspiration</a></li>
                                            <li><a href="/templates/detail/wardrobePlanning.html#doorprofile" class="dropdown-item">Door panels</a></li>
                                            <li><a href="/templates/detail/wardrobePlanning.html#profileColours" class="dropdown-item">Door profile colours</a></li>
                                            <li><a href="/templates/detail/wardrobePlanning.html#tvTVsliding" class="dropdown-item">TV in sliding door</a></li>
                                            <li><a href="/templates/detail/wardrobePlanning.html#wardobesurface" class="dropdown-item">Wardrobe surface</a></li>
                                            <li><a href="/templates/detail/wardrobePlanning.html#hingedoors" class="dropdown-item">Hinge doors for wardrobes</a></li>
                                            <li><a href="/templates/detail/wardrobePlanning.html#Lighting" class="dropdown-item">Lighting</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/templates/blog.html">blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/templates/contactUs.html">Contact</a></li>
                </ul>
            </div>
            <div class="contact-indo-social">
                <ul>
                    <li class="call_us_now_parent">
                        <a href="#" class="call_us_now">
                            <span class="left-span">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg>
                            </span>
                            <span class="right-span">
                                <p class="span_p_n">Connect Now</p>
                            </span>
                        </a>
                        <ul class="talk-expert-menu">

                            <li>
                                <a href="tel:1800225050">
                                    <span class="talk-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                            <path d="M376 32C504.1 32 608 135.9 608 264C608 277.3 597.3 288 584 288C570.7 288 560 277.3 560 264C560 162.4 477.6 80 376 80C362.7 80 352 69.3 352 56C352 42.7 362.7 32 376 32zM384 224C401.7 224 416 238.3 416 256C416 273.7 401.7 288 384 288C366.3 288 352 273.7 352 256C352 238.3 366.3 224 384 224zM352 152C352 138.7 362.7 128 376 128C451.1 128 512 188.9 512 264C512 277.3 501.3 288 488 288C474.7 288 464 277.3 464 264C464 215.4 424.6 176 376 176C362.7 176 352 165.3 352 152zM176.1 65.4C195.8 60 216.4 70.1 224.2 88.9L264.7 186.2C271.6 202.7 266.8 221.8 252.9 233.2L208.8 269.3C241.3 340.9 297.8 399.3 368.1 434.2L406.7 387C418 373.1 437.1 368.4 453.7 375.2L551 415.8C569.8 423.6 579.9 444.2 574.5 463.9L573 469.4C555.4 534.1 492.9 589.3 416.6 573.2C241.6 536.1 103.9 398.4 66.8 223.4C50.7 147.1 105.9 84.6 170.5 66.9L176 65.4z" />
                                        </svg>
                                    </span>
                                    <div>
                                        <span class="small-txt-menu">Contact</span>
                                        <span class="large-txt-menu">Aniket Bhor - 9137852167</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="tel:7770067615">
                                    <span class="talk-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                            <path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z" />
                                        </svg>
                                    </span>
                                    <div>
                                        <span class="small-txt-menu">For Email Support</span>
                                        <span class="large-txt-menu">info@raumplus.co.in</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="download_parent">
                        <a href="/templates/downloads.html">Dowloads</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
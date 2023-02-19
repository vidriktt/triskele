<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); ?></title>

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <style type="text/css">
        .masthead {
            background: url("<?php echo get_template_directory_uri() ?>/assets/images/header_background.jpg") no-repeat bottom center scroll;
        }

        .accordionBack {
            background-image: url("<?php echo get_template_directory_uri() ?>/assets/images/accordion.jpg");
        }
    </style>

    <?php wp_head(); ?>
</head>



<body id="page-top" data-spy="scroll" data-target="#mainNav" data-offset="0">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger darkLogo" href="#page-top"><img src="<?php echo get_template_directory_uri() ?>/assets/images/triskele_logo.png" alt="..." style="max-width: 100%; max-height: 60px;" />&#160Triskele&#160</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <?php
                    if (add_query_arg(array(), $wp->request) != "ee") {
                        echo '<li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#ensemble">Ensemble</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#discography">Discography</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#programmes">Programmes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#concerts">Concerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#media">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contacts</a>
                        </li>';
                    } else {
                        echo '<li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#ensemble">Ansambel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#albumid">Albumid</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#kavad">Kavad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#kontserdid">Kontserdid</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#meedia">Meedia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a>
                        </li>';
                    }
                    ?>

                    <li class="nav-item">
                        <a class="nav-link rose" href="index.php/ee">EE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rose" href="/">EN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Music Player -->
    <nav id="background-music-nav" class="navbar navbar-default fixed-bottom">
        <div id="background-music" class="container right">
            <a id="background-music-button" class="fa fa-play"></a>
            <?php
            if (add_query_arg(array(), $wp->request) != "ee") {
                echo '<p id="background-music-text">Background music</p>';
            } else {
                echo '<p id="background-music-text">Taustamuusika</p>';
            }
            ?>
        </div>
    </nav>


    <!-- Intro Header -->
    <header class="masthead">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <a href="#ensemble" class="btn btn-circle js-scroll-trigger">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
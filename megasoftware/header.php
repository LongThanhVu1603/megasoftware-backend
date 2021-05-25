<!DOCTYPE html>
<html lang=" <?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megasoftware</title>
    <link rel="shortcut icon" type="image/png" href="<?= get_template_directory_uri() ?>/assets/images/logo.png"/>

    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Link Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php wp_head(); ?>
</head>

<body id="content" <?php body_class(); ?>>

    <!-- Header -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">

            <a href="/megasoft" class="navbar-branch">
                <img src="<?= get_template_directory_uri() ?>/assets/images/LogoMegaSoft.png" alt="Logo">
            </a>
            
            <!-- <?php 
                // if(is_home()){
                //     printf('<h1> <a style="font-size: 24px; color: #6d6d6d;" href="%1$s" class="navbar-branch"> %2$s </a></h1>', esc_url(home_url()),get_bloginfo('sitename'));
                // }
                // else{
                //     printf('<p> <a style="font-size: 24px; color: #6d6d6d;" href="%1$s" class="navbar-branch"> %2$s </a></p>', esc_url(home_url()),get_bloginfo('sitename'));
                // }
            ?> -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
            
                <!-- Menu -->
                <ul class="navbar-nav ml-auto">
                <?php
                    if(has_nav_menu('mega_primary-menu')){
                        wp_nav_menu( array(
                            'theme_location' => 'mega_primary-menu',
                            'container' => false,
                            'fallback_cb' => false,
                            'menu_id' => 'header-menu',
                            'menu_class' => 'navbar-nav',
                            'depth' => 5,
                            'wakler' => new MEGA_Custom_Nav_Walker()
                        ));
                    }
                ?>
                </ul>

                
                <!-- Ô tìm Kiếm -->
                <form class="form-inline" action="#">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm Kiếm">
                        <button class="input-group-text"> <i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <hr class="my">
    <!-- End Header -->
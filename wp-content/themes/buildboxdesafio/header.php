<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
    <title>Mr.Buildbox</title>
</head>
<body <?php body_class(); ?>>

<header class="sticky-top">
<!-- header menu on the fron-end page-->
    <div class="logo">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/catdog2.png" alt="" class="responsive-image"></a>
    </div>

        <div class="container">
            <input type="checkbox" class="toggle-menu">
            <div class="hamburger"></div>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' =>'top-menu',
                            'menu_class' =>'navigation-class',
                            'menu_id'   =>''

                            )

                    );
                ?>
         </div><!-- end <div class="container"> -->

</header>


<!DOCTYPE html>
<!--[if IE 8]><html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if lte IE 9]><html <?php language_attributes(); ?> class="ie9"><![endif]-->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="dns-prefetch" href="//google-analytics.com">
        <?php wp_head(); ?>
        <!--[if lt IE 10]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/livingston-css3-mediaqueries-js/1.0.0/css3-mediaqueries.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <![endif]-->
    </head>
    <body <?php body_class(); ?>>
        <header class="header" role="banner">

            <div class="topnav" id="myTopnav">
                <div class="wrap">
                    <div class="logo">
                        <!-- <?php echo theme_get_custom_logo(); ?> -->
                        <div><span class="name">M<span class="drop">ichael</span> G<span class="drop">arrison</span></span> <span class="title">S<span class="drop">olutions</span> E<span class="drop">ngineer</span></span></div>
                    </div>
                    <?php wp_nav_menu(['theme_location' => 'header', 'menu_class' => 'menu']); ?>
                    <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                        HIIII
                    </a>
                </div>
                <?php wp_nav_menu(['theme_location' => 'header', 'menu_class' => 'mobile']); ?>
                
            </div>
            <script>
                function toggleNav() {
                    var x = document.getElementById("myTopnav");
                    if (x.className === "topnav") {
                        x.className += " responsive";
                    } else {
                        x.className = "topnav";
                    }
                }
            </script>
        </header>

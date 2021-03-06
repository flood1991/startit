<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">
        <!-- Favicon and Touch Icons -->
        <link href="images/favicon.png" rel="shortcut icon" type="image/png">
        <link href="http://wpthemebooster.com/demo/themeforest/html/carrby/images/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="http://wpthemebooster.com/demo/themeforest/html/carrby/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
        <link href="http://wpthemebooster.com/demo/themeforest/html/carrby/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
        <link href="http://wpthemebooster.com/demo/themeforest/html/carrby/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
        <title>Carrby - Agency Template</title>

        <!-- Lead Style -->
        <link href="wp-content/themes/startit/css/style.css" rel="stylesheet" type="text/css">
            <?php wp_head(); ?>
    </head>

    <body>
    
        <!-- Start Header -->
        <header id="header" class="header">
            <div class="navigation">
                <div class="container">
                    <nav id="flexmenu">
                        <div class="logo">
                        <?php
                            $logo = get_field('logo-main', 'option');
                            if( !empty($logo) ):
                        ?>
                            <a href="#"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>
                        <?php
                            endif;
                        ?>
                        </div>
                        <div class="nav-inner">
                            <div id="mobile-toggle" class="mobile-btn"></div>
                            <?php 
                                wp_nav_menu(array(
                                    'theme_location' => 'head',
                                    'container_class' => 'nav-inner',
                                    'menu_class' => 'main-menu'
                                )); 
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
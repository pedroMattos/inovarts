<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Pedro Mattos">
        <!-- CDN Styles -->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Main Style -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css" type="text/css">
        <!-- FavIcon -->
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/newfavicon.png">
        <title>Inovarts Studios</title>
        <?php wp_head(); ?>
    </head>

    <!-- Floater Menu -->
    <div class="floater-menu">
        <div id="lines">
            <div class="line-menu" id="line-menu-1"></div>
            <div class="line-menu" id="line-menu-2"></div>
            <div class="line-menu" id="line-menu-3"></div>
        </div>
        <div class="row center" id="content-text">
            <div class="col m6 s12">
                <ul>
                    <li class="menu-item"><a href="portfolio"><p class="item">Portfolio</p></a></li>
                    <li class="menu-item"><a href="services"><p class="item">Services</p></a></li>
                    <li class="menu-item"><a href="partners"><p class="item">Partners</p></a></li>
                </ul>
            </div>
            <div class="col m6 s12">
                <ul>
                    <li class="menu-item"><a href="privacity-policy"><p class="item">Privacity Police</p></a></li>
                    <li class="menu-item"><a href="contact"><p class="item">Contact</p></a></li>
                    <li class="menu-item"><a href="blog"><p class="item">Blog</p></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Floater icon -->
    <div id="floater-tools">
        <div id="logo-on-mobile">
            <a href="<?php bloginfo('url') ?>">
                <img id="logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo-inovarts.png">
            </a>
        </div>
        <div id="search-in-site">
            <div class="inline">
                <?php echo file_get_contents('wp-content/themes/inovarts/assets/svg/search.svg') ?>
            </div>
            <div class="inline">
                <form method="POST" id="s-form">
                    <input type="text" id="search-site" name="s" placeholder="Pesquisar no site" />
                </form>
            </div>
        </div>
        <div id="social-media">
            <div class="inline">
                <?php echo file_get_contents('wp-content/themes/inovarts/assets/svg/avatar.svg') ?>
            </div>
            <div class="inline">
                <a target="_blank" id="mail_to" href="mailto:email"><?php echo file_get_contents('wp-content/themes/inovarts/assets/svg/envelope.svg') ?></a>
            </div>
            <div class="inline">
                <a target="_blank" href="facebook.com"><?php echo file_get_contents('wp-content/themes/inovarts/assets/svg/facebook.svg') ?></a>
            </div>
            <div class="inline">
                <a target="_blank" href="instagram.com"><?php echo file_get_contents('wp-content/themes/inovarts/assets/svg/instagram.svg') ?></a>
            </div>
            <div class="inline">
                <a target="_blank" href="contato"><?php echo file_get_contents('wp-content/themes/inovarts/assets/svg/linkedin.svg') ?></a>
            </div>
            <div class="inline">
                <a id="chat_whatsapp" target="_blank" href="https://api.whatsapp.com/send?l=pt_br&phone=12345678"><?php echo file_get_contents('wp-content/themes/inovarts/assets/svg/whatsapp.svg') ?></a>
            </div>
        </div>
    </div>
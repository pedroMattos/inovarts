<div class="slider">
    <div class="slide">
        <div id="wrapper">
            <img src="<?php bloginfo('template_url') ?>/assets/img/home.jpg" alt="img" />
            <div class="cta-field">
                <div id="text">
                    <p>Lorem Ipsum</p>
                    <h1>Lorem ipsum dolor sit amet </h1>
                </div>
                <div id="btn">
                    <a href="<?php bloginfo('url') ?>/portfolio"><button class="btn-cta">Portfolio</button></a>
                    <a href="<?php bloginfo('url') ?>/services"><button class="btn-cta">Services</button></a>
                </div>
            </div>
        </div>
        <div id="logo-on-mobile">
            <a href="<?php bloginfo('url') ?>">
                <img id="logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo-inovarts.png">
            </a>
        </div>
        <div class="box row">
            <div class="col s12 m4 card-service-home">
                <?php echo file_get_contents('wp-content/themes/inovarts/assets/svg/worldwide.svg') ?>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col s12 m4 card-service-home">
                <?php echo file_get_contents('wp-content/themes/inovarts/assets/svg/social-media.svg') ?>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col s12 m4 card-service-home">
                <?php echo file_get_contents('wp-content/themes/inovarts/assets/svg/ebook.svg') ?>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</div>
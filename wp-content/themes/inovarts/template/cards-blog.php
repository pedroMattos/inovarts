<div class="col m4 s12">
    <div class="own-card">
        <img src="<?php bloginfo('template_url') ?>/assets/img/landscape.jpg" />
        <div class="category">
            <div class="category-icon">
                <?php echo file_get_contents("wp-content/themes/inovarts/assets/svg/cat_exemple.svg"); ?>
            </div>
            <div class="head-internal">
                <div id="like-card">
                    <?php echo file_get_contents("wp-content/themes/inovarts/assets/svg/heart.svg"); ?>
                </div>
                <div id="post-date">
                    <p><?php echo file_get_contents("wp-content/themes/inovarts/assets/svg/time.svg"); ?>the time</p>
                </div>
                <h2>Category</h2>
            </div>
            <div class="row footer-internal">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class=" col s12 m6">
                    <p>by: <strong class="link-card"><a href="">author_name</a></strong></p>
                </div>
                <div class="col s12 m6 internal-link-card">
                    <a class="link-text-right" href="<?php the_permalink() ?>">READ MORE</a>
                </div>
            </div>
        </div>
        <h2>Category</h2>
        <p>Lorem Ipsum Dolor Sit Amet</p>
        <p>by: <strong class="link-card">author_name</strong></p>
    </div>
</div>
<section class="row" id="to-blog">
    <div class="col m9 s12" id="header">
        <div class="row">
            <div class="col m6 s12">
                <h2>See Our Blog</h2>
            </div>
            <div id="btn-blog" class="col m6 s12">
                <a href="<?php bloginfo('url') ?>/blog"><button class="btn-cta">Go to</button></a>
            </div>
        </div>
    </div>

    <div class="row container" id="card-area">
        <?php for($i = 0; $i <= 2; $i++){ include 'cards-blog.php'; } ?>
    </div>
    <div class="row container center"><a class="link-text" href="<?php bloginfo('url') ?>/blog">SEE MORE</a></div>
</section>
    <!-- Footer -->
        <footer>
            <div id="wrapp-footer">
                <div class="row" id="body-footer">
                    <div id="logo-footer" class="col s12 m2">
                        <img id="logo-footer-img" src="<?php bloginfo('template_url'); ?>/assets/img/logo-inovarts.png">
                    </div>
                    <div id="links-list" class="col s12 m2">
                        <ul>
                            <li><a href="#" class="link_footer">Portfolio</a></li>
                            <li><a href="#" class="link_footer">Services</a></li>
                            <li><a href="#" class="link_footer">Partners</a></li>
                            <li><a href="#" class="link_footer">Blog</a></li>
                            <li><a href="#" class="link_footer">Contact</a></li>
                            <li><a href="#" class="link_footer">Privacity Police</a></li>
                        </ul>
                    </div>
                    <div id="contact-footer" class="col s12 m3">
                        <h3>Contact Us:</h3>
                        <a class="link_footer"><p>Email:email@mail.com</p></a>
                        <a class="link_footer"><p>Phone:(71)00000-0000</p></a>
                    </div>
                    <div id="services-portfolio" class="col s12 m3">
                        <h3>See our services:</h3>
                        <div id="btn-footer-portfolio" class="col m6 s12">
                            <a href="<?php bloginfo('url') ?>/services"><button class="btn-cta">Services</button></a>
                        </div>
                    </div>
                </div>
                <div class="row" id="site-map">
                    <div id="list" class="col s12 m4">
                        <p class="inline">Site Map: </p>
                        <ul class="inline">
                            <li><a href="#" class="link_footer">link</a></li>
                            <li><a href="#" class="link_footer">link</a></li>
                            <li><a href="#" class="link_footer">link</a></li>
                            <li><a href="#" class="link_footer">link</a></li>
                            <li><a href="#" class="link_footer">link</a></li>
                            <li><a href="#" class="link_footer">link</a></li>
                        </ul>
                    </div>
                    <div id="copyright" class="col s12 m4">
                        <p>Copyright © <?php echo date('Y') ?> INOVARTS STUDIOS. All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- Scripts jquery -->
            <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
            <!-- Scripts -->
            <script src="<?php bloginfo('template_url');?>/assets/js/main.js"></script>
            <!-- scripts Materialize -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <?php wp_footer(); ?>
        </footer>
    </body>
</html>
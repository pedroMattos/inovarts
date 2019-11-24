<?php get_header();
include 'template/header-page.php';
?>

<section id="contact-form">
    <form class="col s12 form z-depth-3" action="<?php bloginfo('url') ?>/thank-you"  id="form-contato" method="POST">
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Insira seu Nome" id="name" name="first_name" type="text" aria-required="true" required="" class="validate">
                <label for="first_name">Name*</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="myemail" placeholder="E-mail" aria-required="true" name="email" type="email" required="" class="validate">
                <label for="email">Email*</label>
                <span class="helper-text" data-error="invalid e-mail!" data-success="Valid!"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="mytell" placeholder="(xx)xxxx-xxxxx" aria-required="true" required="" name="tell" type="text" class="validate phone_with_ddd">
                <label for="tell">Phone*</label>
            </div>
        </div>
        <div class="input-field col s12">
            <select id="imv-time" required="" name="service">
                <option value="" disabled selected>Choose One</option>
                <option value="Web">Web</option>
                <option value="Social Media">Social Media</option>
                <option value="E-book">E-book</option>
            </select>
            <label>What Service do you required?*</label>
        </div>
        <div id="send">
            <!--<input class="btn-large waves-effect waves-light" id="submit" type="submit" value="EU QUERO!" name="action">-->
            <input class="btn-large waves-effect waves-light send-button" type="submit" value="Send">
        </div>
    </form>
</section>


<?php get_footer();

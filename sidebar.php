<div id="sidebar">
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">
            <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            }
            ?>
        </div>
        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13567.130899977785!2d-106.4250822!3d31.7764115!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc91b2ee97468a38b!2sPasitos+Clinic!5e0!3m2!1sen!2sus!4v1532376749705"
                    width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
        <section class="our-services">
            <?php get_template_part('template-parts/icon', 'pediatric'); ?>
            <h4>Our Services</h4>
        </section>

        <section class="icon-row">
            <div class="container-fluid">
                <div class="row flex-row">
                    <div class="col-xs-6 col-md-6">
                        <a href="<?= SITEURL ?>/physical-therapy/" class="icon-button">
                            <?php get_template_part('template-parts/icon', 'pediatric'); ?>
                            <div class="title">Pediatric Physical
                                Therapy
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <a href="<?= SITEURL ?>/occupational-therapy/" class="icon-button">
                            <?php get_template_part('template-parts/icon', 'occupational'); ?>
                            <div class="title">Pediatric Occupational
                                Therapy
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <a href="<?= SITEURL ?>/speech-therapy/" class="icon-button">
                            <?php get_template_part('template-parts/icon', 'speech'); ?>
                            <div class="title">Pediatric Speech
                                Therapy
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <a href="<?= SITEURL ?>/behavioral-therapy/" class="icon-button">
                            <?php get_template_part('template-parts/icon', 'behavioral'); ?>
                            <div class="title">Pediatric Behavioral
                                Therapy
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row flex-row no-margin">
                    <div class="col-xs-6 col-md-6">
                        <a href="<?= SITEURL ?>/autism-therapy/" class="icon-button">
                            <?php get_template_part('template-parts/icon', 'autism'); ?>
                            <div class="title">Autism Therapy
                                Services
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <a href="<?= SITEURL ?>/down-syndrome/" class="icon-button">
                            <?php get_template_part('template-parts/icon', 'downs'); ?>
                            <div class="title">Down’s Syndrome Therapy
                                Services
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <a href="<?= SITEURL ?>/physical-therapy/" class="icon-button">
                            <?php get_template_part('template-parts/icon', 'feet'); ?>
                            <div class="title">Pediatric Therapy
                                Services
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <a href="<?= SITEURL ?>/cerebral-palsy/" class="icon-button">
                            <?php get_template_part('template-parts/icon', 'cerebral'); ?>
                            <div class="title">Cerebral Palsy
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>

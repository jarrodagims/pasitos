<?php if (!is_page('contact-us')): ?>
    <div id="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13567.130899977785!2d-106.4250822!3d31.7764115!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc91b2ee97468a38b!2sPasitos+Clinic!5e0!3m2!1sen!2sus!4v1532102532357" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<?php endif; ?>
<div class="container-fluid sub-header top-header footer-header">
        <a class="navbar-brand visible-sm visible-xs" href='<?php echo get_site_url(); ?>'><img
                src="<?= IMGURL; ?>logo.png"
                alt="<?php echo get_bloginfo('description'); ?>"/></a>
        <div class="row ">
            <div class="v-align">
                <a class="navbar-brand hidden-xs hidden-sm" href='<?php echo get_site_url(); ?>'><img
                            src="<?= IMGURL; ?>logo.png"
                            alt="<?php echo get_bloginfo(
                               'description'
                           ); ?>"/></a>
                <div class="col-xs-12 col-md-10 navbar-button text-center">
                    <?php echo responsive_bs_menu(
                        'primary',
                        'left',
                        SITENAME
                    ); ?>
                </div>
            </div>
        </div>
</div>
<section id="footer"> 
    <div class="container">
            <div class="row flex-row">
                <div class="col-xs-12 logo-footer">
                    <p><strong><span>PASITOS CLINIC</span></strong> provides pediatric therapy services to children in the
                    El Paso area.</p>
                </div>
                <div class="col-xs-12 contact-footer">
                    <div><span class="title">CONTACT</span>
                    <p>406 Chelsea St<br />
                        El Paso, TX 79905<br />
                        PH. (915) 307-7612
                    </p></div>
                </div>
                <div class="col-xs-12 hours-footer">
                    <div><span class="title">OFFICE HOURS</span>
                    <p>Monday thru Friday:<br />
                        9:00am - 6:00pm<br />
                        Saturday & Sunday: Closed
                    </p></div>
                </div>
                <div class="col-xs-12 button-footer">
                    <div>
                    <a href="<?= SITEURL; ?>/contact-us/"><button class="btn btn-primary btn-md">CONTACT US TODAY</button></a>
                    </div>
                </div>
            </div>
    </div>
    <div class="visible-xs social-container"><?php
     $sm = new SocialMedia(array('facebook', 'twitter'));
     $sm->setSize('sm');
     $sm->showNetworkButtons();
     $sm->setColorType('singleColor');
     ?></div>
</section>
<section id="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="hidden-xs"><?php
                $sm = new SocialMedia(array('facebook', 'twitter'));
                $sm->setSize('sm');
                $sm->showNetworkButtons();
                $sm->setColorType('singleColor');
                ?></div>
                    <div>
                    &copy; <?php echo date('Y'); ?> <?php bloginfo(
     'name'
 ); ?> | All Rights Reserved | Powered by AGI Marketing <a href="https://www.agims.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/agi-logo.png" alt="AGI Marketing" class="agi-logo"/></a>
                </div>
            </div>
        </div>
</section>
<?php wp_footer(); ?>
</body>
</html>

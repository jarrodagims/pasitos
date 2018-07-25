<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

        <?= get_option('sherpa_schema') ?>

    <?php endif; ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= SITEURL ?>/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= SITEURL ?>/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= SITEURL ?>/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= SITEURL ?>/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= SITEURL ?>/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= SITEURL ?>/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= SITEURL ?>/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= SITEURL ?>/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= SITEURL ?>/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= SITEURL ?>/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITEURL ?>/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= SITEURL ?>/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= SITEURL ?>/icons/favicon-16x16.png">
    <link rel="manifest" href="<?= SITEURL ?>/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= SITEURL ?>/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body <?php body_class(); ?>>
<?php if (is_front_page()) : ?>
<div class="landing-bg"><?php endif; ?>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->
    <div class="thin-header">
        <div class="container">
            <div class="row flex-row">
                <div class="col-xs-12 flex-col">
                    <div class="spanish">WE SPEAK <span>SPANISH</span></div>
                    <div><ul class="nav navbar-nav navbar-right">
                        <li class="menu-item directions"><a
                                    href="<?php echo get_site_url() ?>/contact-us">Directions</a></a></li>
                        <li class="menu-item contact"><a href="tel:9153077612">Call</a></li>
                    </ul></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid sub-header top-header">
            <div class="row v-align">

                    <div class="col-xs-12 navbar-button text-center">
                        <a class="navbar-brand" href='<?php echo get_site_url() ?>'><img
                                    src="<?= IMGURL ?>logo.png"
                                    alt="<?php echo get_bloginfo('description'); ?>"/></a>
                        <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                    </div>
        </div>
    </div>



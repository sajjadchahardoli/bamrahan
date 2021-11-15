<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=" <?php bloginfo('charset') ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href=" <?php bloginfo('pingback_uri'); ?> ">
    <?php endif; ?>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?> dir="rtl" class=" ">
    <div class="hidden lg:flex">
        <?php include 'wp-content/themes/bamrahan/themplate-parts/header/desktop-header.php' ?>
    </div>

    <div class="flex lg:hidden">
        <?php include 'wp-content/themes/bamrahan/themplate-parts/header/mobile-header.php' ?>
    </div>
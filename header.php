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

<body <?php body_class() ?> dir="rtl">
    <header class="w-full h-16 bg-white shadow">
        <div class="flex justify-between items-center px-6">
            <div class="flex">

                <!--Start navbar brand -->
                <div class="flex h-16 items-center">
                    <?php if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    } ?>
                    <h1 class="font-bold mx-4"><?php bloginfo('name') ?></h1>
                </div>
                <!--End navbar brand -->

                <!-- Start navigation -->
                <nav class="flex h-16 item-center">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex justify-center items-center mx-5',
                        'add_li_class'  => 'mx-2'
                    )) ?>
                </nav>
                <!-- End navigation  -->

            </div>




            <div class="flex items-center">
                <div class="ml-4">
                    <?php echo get_avatar(get_current_user_id(), 32, '', '', array('class' => 'rounded-full')) ?>
                </div>
                <div class="h-full">
                    <?php
                    global $current_user;
                    if ($current_user->exists()) {
                        wp_get_current_user();
                        echo $current_user->user_login;
                    } else {
                    ?>
                        <a href="#">ورود</a>
                    <?php
                    }
                    ?>
                </div>
                <div class="border-l-2 pl-6 mr-1 cursor-pointer text-gray-500 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'secondary',
                        'container' => false,
                        'menu_class' => 'flex flex-col justify-center mx-5 absolute top-20 right-0 shadow rounded-md p-4'
                    )) ?>
                </div>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </span>
            </div>
        </div>


    </header>
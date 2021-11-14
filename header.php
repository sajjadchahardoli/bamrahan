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

<body <?php body_class() ?> dir="rtl" class="box-border">
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

            <!-- Start left navbar -->
            <div class="flex items-center">
                <!-- Search icon -->
                <div class=" text-white  ml-4 cursor-pointer relative" onclick="">
                    <input type="text" class="bg-indigo-100 text-black outline-none w-72 py-2 px-8  hidden rounded-md " id="search-input">
                    <span class="absolute right-2 top-2 hidden" id="close-search">
                        <i class="fas fa-times text-black" onclick="closeSearch()"></i>
                    </span>
                    <i class="fas fa-search bg-indigo-200 hover:bg-indigo-400 p-3 rounded-md" onclick="openSearch()"></i>
                </div>
                <!-- Search icon -->


                <div class="flex h-full">
                    <?php
                    global $current_user;
                    if ($current_user->exists()) {
                    ?>
                        <div class="flex bg-blue-700 text-white py-2 pr-2 rounded-md">
                            <?php
                            echo get_avatar(get_current_user_id(), 24, '', '', array('class' => 'rounded-full'));
                            wp_get_current_user();
                            ?>
                            <div class="cursor-pointer mr-2 select-none " onclick="secondaryNavToggle()">
                                <?php
                                echo $current_user->user_login;
                                ?>
                                <!-- Arrow bottom icon -->
                                <span class="bg-indigo-200 text-center rounded-md p-3 mr-2 relative cursor-pointer hover:bg-indigo-400  ">
                                    <i class="fas fa-ellipsis-v"></i>
                                    <div class="h-4 w-4 bg-red-600 text-white text-xs rounded-full absolute -left-1 -bottom-1">3</div>
                                </span>
                                <!-- Arrow bottom icon -->
                            </div>
                        </div>



                    <?php
                    } else {
                    ?>
                        <div class="bg-blue-700 text-white py-2 pr-2 rounded-md ">
                            <a href="#" class="">ورود / ثبت نام</a>
                            <span class="bg-indigo-200 text-center rounded-md p-3 mr-2 relative cursor-pointer hover:bg-indigo-400" onclick="secondaryNavToggle()">
                                <i class="fas fa-ellipsis-v"></i>
                                <div class="h-4 w-4 bg-red-600 text-white text-xs rounded-full absolute -left-1 -bottom-1">3</div>
                            </span>
                        </div>

                    <?php
                    }
                    ?>
                </div>



                <!-- Secondary navigation-->
                <div class="hidden" id="secondary-nav">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'secondary',
                        'container' => false,
                        'menu_class' => 'flex flex-col justify-center mx-5 absolute top-20 left-0 shadow rounded-md p-4'
                    )) ?>
                </div>
                <!-- Secondary navigation-->

            </div>
            <!-- End left navbar -->
        </div>


    </header>
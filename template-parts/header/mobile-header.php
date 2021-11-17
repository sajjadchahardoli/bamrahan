<header class="w-full h-16 bg-white shadow select-none box-border px-6">
        <div class="flex justify-between items-center">
            <div class="flex items-center"  onclick="toggleMenu()">
                <i class="fas fa-bars">
                </i>
                <h1 id="h-head" class="font-bold text-xl select-none mr-3">
                    <?php bloginfo('name') ?>
                </h1>
            </div>
            <div class="flex h-16 items-center">
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } ?>
            </div>
        </div>

        <div class="hidden" id="menu-mobile">
            <div class=" text-white mt-4 ">
                <input type="text" placeholder="جستجو کنید" class="bg-indigo-100 text-black outline-none w-full py-2 pr-4 relative  rounded-md">
                <span>
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <hr>
            <div>
                <nav class="flex">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex flex-col',
                        'add_li_class'  => 'my-2',
                        'add_a_class' => 'font-bold'
                    )) ?>
                </nav>
            </div>
            <hr class="mt-4">

            <div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'secondary',
                    'container' => false,
                    'menu_class' => 'flex flex-col ',
                    'add_li_class' => 'my-2',
                    'add_a_class' => 'font-bold'
                )) ?>
            </div>
            <hr>

            <div class="flex mt-5">
                <?php
                global $current_user;
                if ($current_user->exists()) {
                ?>
                    <div class="flex w-full bg-blue-700 text-white py-2 pr-2 rounded-md">
                        <?php
                        echo get_avatar(get_current_user_id(), 24, '', '', array('class' => 'rounded-full'));
                        wp_get_current_user();
                        ?>
                        <div class="flex justify-between cursor-pointer mr-2 select-none " onclick="secondaryNavToggle()">
                            <?php
                            echo $current_user->user_login;
                            ?>
                            <!-- Arrow bottom icon -->

                            <!-- Arrow bottom icon -->
                        </div>
                    </div>
                    <span class="bg-indigo-200 text-center rounded-md p-3 mr-2  cursor-pointer hover:bg-indigo-400  ">
                        <i class="fas fa-ellipsis-v"></i>
                    </span>



                <?php
                } else {
                ?>
                    <div class="bg-blue-700 w-full text-white py-2 pr-2 rounded-md text-center">
                        <a href="#" class="text-center">ورود / ثبت نام</a>

                    </div>

                <?php
                }
                ?>
            </div>

        </div>
</header>
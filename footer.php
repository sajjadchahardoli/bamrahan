        <footer>
            <div class="flex">
                <div>
                    <div class="flex">
                        <div>
                            <?php if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                            }
                            ?>
                        </div>
                        <div>
                            <?php bloginfo('name'); ?>
                        </div>


                    </div>
                    <div></div>
                </div>
                <div></div>
                <div></div>
            </div>
        </footer>
        <?php wp_footer(); ?>
        </body>

        </html>
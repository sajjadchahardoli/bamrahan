        <footer class="rounded-md shadow bg-white w-11/12 my-5 mx-auto p-6 pb-12 mb-12">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/3 p-2 flex  flex-col md:items-center">
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
                    <div>
                        <p>
                            توضیحات درباره سایت
                            توضیحات درباره سایت
                            توضیحات درباره سایت
                            توضیحات درباره سایت
                            توضیحات درباره سایت
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-2 flex  flex-col md:items-center">
                    <div>
                        دسترسی سریع
                    </div>
                    <div class="flex md:mx-auto">
                        <div>
                            <ul>
                                <li>
                                    <a href="#">لینک من</a>
                                </li>
                                <li>
                                    <a href="#">لینک من</a>
                                </li>
                                <li>
                                    <a href="#">لینک من</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <a href="#">لینک من</a>
                                </li>
                                <li>
                                    <a href="#">لینک من</a>
                                </li>
                                <li>
                                    <a href="#">لینک من</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-2 flex  flex-col md:items-center">
                    <div>ارتباط با ما</div>
                    <div>توضحات تماس با ما</div>
                    <div>
                        <div>0900 000 0000</div>
                        <div>0900 000 0000</div>
                    </div>
                </div>
            </div>
            <div class="w-10/12 bg-white rounded-md shadow mx-auto -mb-20 ">
                <p class="p-6 text-center">
                    کپی رایت 
                </p>
            </div>
        </footer>
        <?php wp_footer(); ?>
        </body>

        </html>
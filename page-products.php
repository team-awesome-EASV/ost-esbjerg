<?php get_header()?>
<main class="products">
    <div class="hero">
        <div class="hero-text">
            <h1> Vores produkter</h1>
            <div class="links-container">
                <ul>
                    <li>
                        <a href="#tapas">
                            <p class="product-link">Tapas</p>
                        </a>
                    </li>
                    <li>
                        <a href="#pizzaKit">
                            <p class="product-link">Pizza kit</p>
                        </a>
                    </li>
                    <li>
                        <a href="#oster">
                            <p class="product-link">Oster</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section>
        <article id="tapas">


            <div class="product-info">

                <section class="image">
                    <div class="product-image-container">
                        <h2>Tapas</h2>
                        <div class="product-image">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/tapas.jpg"
                                alt="picture representing tapas plates, filled with cheese, salami, fruits, and seeds "
                                title="tapas board">
                        </div>
                        <div class="tapas-price">
                            <div>
                                <?php if( get_field('tapas_price') ): ?>
                                <p class="price"><?php the_field('tapas_price'); ?></p>
                                <?php endif; ?>
                                <!-- <p class="price">120</p> -->
                                <p class="currency">DKK</p>
                                <p class="extra-info">Per person</p>
                            </div>
                        </div>
                    </div>



                </section>

                <section class="tapas-product-text">
                    <div class="product-text-container">
                        <?php if( get_field('tapas_title') ): ?>
                        <h3><?php the_field('tapas_title'); ?></h3>
                        <?php endif; ?>
                        <!-- <h3>Tapas anretning</h3> -->

                        <?php if( get_field('tapas_description') ): ?>
                        <p><?php the_field('tapas_description'); ?></p>
                        <?php endif; ?>
                        <!-- <p>Vores lækre tapas anretning kan bestilles fra en person og op efter, nok til en hel måltid Du
                            får forskellige oste og charcuteri. Samt syltet grønt frugte. Vi tager også hensyn til
                            allergi. Sig til når du bestiller. </p> -->

                    </div>
                    <div class="product-ingredients-list">
                        <h3>Indenholder</h3>
                        <ul>

                            <li>
                                <div></div>
                                <p>4-5 forskellige oste</p>
                            </li>
                            <li>
                                <div>

                                </div>
                                <p>4-5 slags charcuterie</p>
                            </li>
                            <li>
                                <div></div>
                                <p>Oliven og syltet grønt</p>
                            </li>
                            <li>
                                <div></div>
                                <p>Forskellige dips</p>
                            </li>
                            <li>
                                <div></div>
                                <p>Frugt</p>
                            </li>

                        </ul>

                        <div class="tapas-line-ornament"></div>

                    </div>

                    <div class="contact-info">
                        <p>Place din order her</p>
                        <a href="tel:+4575122057">
                        <button class="contact-phone" title="call 004575122057 to place your order">
                            <div></div>
                            <p class="phone-number">

                                <span>+</span>
                                <span>45</span>
                                <span>75</span>
                                <span>12</span>
                                <span>20</span>
                                <span>57</span>
                            </p>
                        </button>
                        </a>
                    </div>

                </section>

            </div>

        </article>
        <div class="product-separator-container-olives">
        </div>

        <article id="pizzaKit">
            <div class="product-info">
                <section class="image">
                    <div class="product-image-container">

                        <h2>Pizza Kit</h2>
                        <div class="pizza-triangle"></div>
                        <div class="pizza-image">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/pizza.png"
                                alt="image representing a beaked pizza" title="pizza kit">
                        </div>
                        <div class="pizza-price">
                            <div>
                            <?php if( get_field('pizza_price') ): ?>
                                <p class="price"><?php the_field('pizza_price'); ?></p>
                                <?php endif; ?>
                                <p class="currency">DKK</p>
                                <p class="extra-info">Per pizza kit</p>
                            </div>
                        </div>
                        <div class="pizza-line-ornament"></div>
                    </div>
                </section>
                <section class="pizza-product-text">
                    <div class="product-text-container">
                        <?php if( get_field('pizza_title') ): ?>
                        <h3><?php the_field('pizza_title'); ?></h3>
                        <?php endif; ?>

                        <!-- <h3>Pizza dage</h3> -->
                        <?php if( get_field('pizza_description') ): ?>
                        <p><?php the_field('pizza_description'); ?></p>
                        <?php endif; ?>
                        <!-- <p>Vi sælger pizzakits to dage om ugen, Torsdag og Fredag.
                            Du køber en kit fra os, som du selv kan lave. Vi har instruktionelle videoer hernede.
                            Gerne ordr fremadrettet, sådan så vi kan forberede din kit </p> -->

                    </div>
                    <div class="product-ingredients-list">
                        <h3>Indenholder</h3>
                        <ul>

                            <li>
                                <div></div>
                                <p>Pizzadej lavet på surdej</p>
                            </li>
                            <li>
                                <div></div>
                                <p>Hjemmelavet tomatsovs</p>
                            </li>
                            <li>
                                <div></div>
                                <p>Mozzarella</p>
                            </li>
                            <li>
                                <div></div>
                                <p>Charcuterie</p>
                            </li>

                        </ul>

                    </div>
                    <div class="contact-info">
                        <p>Place din order her</p>
                        <a href="tel:+4575122057">
                        <button class="contact-phone" title="call 004575122057 to place your order">
                            <div></div>
                            <p class="phone-number">

                                <span>+</span>
                                <span>45</span>
                                <span>75</span>
                                <span>12</span>
                                <span>20</span>
                                <span>57</span>
                            </p>
                        </button>
                        </a>
                    </div>
                </section>
            </div>
        </article>
        <div class="product-separator-container-wine-glass">
            <div class="product-separator">
            </div>
        </div>
        <article id="oster">
            <div class="ost-text-info">
                <div class="ost-text-container">
                    <div>
                        <div class="round-ornament"></div>
                        <?php if( get_field('cheese_title') ): ?>
                        <h2><?php the_field('cheese_title'); ?></h2>
                        <?php endif; ?>
                        <!-- <h2>Bred vifte af oste</h2> -->

                        <?php if( get_field('cheese_intro_text') ): ?>
                        <p><?php the_field('cheese_intro_text'); ?></p>
                        <?php endif; ?>
                        <!-- <p>Vi sælger pizzakits to dage om ugen, Torsdag og Fredag.
                            Du køber en kit fra os, som du selv kan lave. Vi har instruktionelle videoer hernede.
                            Gerne ordr fremadrettet, sådan så vi kan forberede din kit</p> -->
                    </div>
                </div>

            </div>

            <div class="image-container">
                <div class="round-cheese-line-ornament"></div>
                <img class="portrait"
                    src="<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/cheese-one-portrait.jpg"
                    alt="" title="cheese shop image">
                <img class="landscape"
                    src="<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/outside-in.jpg" alt="">
            </div>
            <div class="about-section-one image-first">
                <img src="<?php echo get_bloginfo( "template_directory"); ?>/static-assets/blue-cheese.jpg"
                    alt="Image of blue-cheese">
                <section class="about-text-one">
                    <?php if( get_field('about_cheese_first_paragraph_title') ): ?>
                    <h3><?php the_field('about_cheese_first_paragraph_title'); ?></h3>
                    <?php endif; ?>
                    <!-- <h3>Lorem ipsum </h3> -->
                    <?php if( get_field('about_cheese_first_paragraph_text') ): ?>
                    <p><?php the_field('about_cheese_first_paragraph_text'); ?></p>
                    <?php endif; ?>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit veniam voluptatem illum eveniet
                        pariatur dolore, consectetur delectus illo ut. Quidem corporis explicabo officia possimus quae
                        iure debitis voluptatem commodi eius!</p> -->
                </section>

                <div class="cheese-slice-line-ornament-container"></div>

            </div>
            <div class="about-section-one image-second">

                <section class="about-text-one">
                    <?php if( get_field('about_cheese_second_paragraph_title') ): ?>
                    <h3><?php the_field('about_cheese_second_paragraph_title'); ?></h3>
                    <?php endif; ?>
                    <!-- <h3>Lorem ipsum </h3> -->
                    <?php if( get_field('about_cheese_second_paragraph_text') ): ?>
                    <p><?php the_field('about_cheese_second_paragraph_text'); ?></p>
                    <?php endif; ?>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit veniam voluptatem illum eveniet
                        pariatur dolore, consectetur delectus illo ut. Quidem corporis explicabo officia possimus quae
                        iure debitis voluptatem commodi eius!</p> -->
                </section>

                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/cheese-three.jpg"
                    alt="view from outside the shop">
            </div>
            <div class="multiple-line-ornament-container"></div>


        </article>

    </section>
    <div class="invite">
        <h2>Vi inviterer dig hjerteligt!</h2>
    </div>

</main>
<?php get_footer() ?>
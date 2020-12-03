<?php get_header()?>
<main class="about">
    <section class="hero">
        <div class="olive-artwork"></div>
        <div class="cheese-wheel-artwork"></div>
        <div class="multi-elements-artwork"></div>
        <div class="chevron-down"></div>
    </section>

    <section class="about-text-container ">
        <div class="mid-line-artwork">

        </div>
        <div class="text-container-one text-container">
            <?php if( get_field('about_text_one_title') ): ?>
            <h2><?php the_field('about_text_one_title'); ?></h2>
            <?php endif; ?>
            <!-- <h2>
                Part
            </h2> -->
            <?php if( get_field('about_text_one_content') ): ?>
            <p><?php the_field('about_text_one_content'); ?></p>
            <?php endif; ?>
            <!-- <p>
                Man kan fremad se, at de har været udset til at læse, at der skal dannes par af ligheder. Dermed kan
                der
                afsluttes uden løse ender, og de kan optimeres fra oven af at formidles stort uden brug fra presse.
                I en
                kant af landet går der blandt om, at de vil sætte den over forbehold for tiden.
            </p> -->

        </div>
        <div class="text-container-two text-container">
            <?php if( get_field('about_text_two_title') ): ?>
            <h2><?php the_field('about_text_two_title'); ?></h2>
            <?php endif; ?>
            <!-- <h2>
                Our cheese
            </h2> -->
            <?php if( get_field('about_text_two_content') ): ?>
            <p><?php the_field('about_text_two_content'); ?></p>
            <?php endif; ?>
            <!-- <p>
                Man kan fremad se, at de har været udset til at læse, at der skal dannes par af ligheder. <Dermed kan
                    der afsluttes uden løse ender, og de kan>optimeres fra oven af at formidles stort uden brug fra
                    presse.
                    I en
                    kant af landet går der blandt om, at de vil sætte den over forbehold for tiden.
            </p> -->
        </div>

    </section>
    <section class="about-owner">
        <div class="text-wrapper">
            <div class="owner-text-container">
                <?php if( get_field('about_katherine_title') ): ?>
                <h2><?php the_field('about_katherine_title'); ?></h2>
                <?php endif; ?>
                <!-- <h2>Kathrine</h2> -->
                <?php if( get_field('about_katherine_content') ): ?>
                <p><?php the_field('about_katherine_content'); ?></p>
                <?php endif; ?>
                <!-- <p>Man kan fremad se, at de har været udset til at læse, at der skal dannes par af ligheder. Dermed kan
                    der afsluttes uden løse ender, og de kan optimeres fra oven af at formidles stort uden brug fra
                    presse. I en kant af landet går der blandt om, at de vil sætte den over forbehold for tiden. </p> -->
            </div>
        </div>


    </section>

</main>
<?php get_footer()?>
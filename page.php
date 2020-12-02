<?php
get_header()
?>

    <div class="container">

        <div class="home-page-section">
            <div class="left-wrapper">
                 <!-- image set in scss--> 
            </div>

            <div class="right-wrapper">
                <div class="olives-ornament"><!-- olives ornament on the top set in css --></div> 
                <img class="home-illu" src="<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/svg/ost-home-illu.svg" alt="">
            </div>
        </div>

        <div class="white-space"></div>

        <div class="info-page-section">
            <div class="cheese-illu-wrapper"></div>
            <div class="circle-banner-1"></div>
            <div class="circle-banner-2"></div>
            <div class="info-container">
                <div class="text-container">
                    <h1>Lorem ipsum</h1>
                    <p>
                       Man kan fremad se, at de har været udset til at læse,
                       at der skal dannes par af ligheder. Dermed kan der afsluttes
                       uden løse ender, og de kan optimeres fra oven af at formidles stort
                       uden brug fra presse. I en kant af landet går der blandt om, at de
                       vil sætte den over forbehold for tiden. 
                    </p>
                    <button>Check it out!</button>
                </div>
                <div class="illu-container">  <!-- fine dining illu set in scss --> </div>
            </div>
        </div>



        <div class="video-section">
            <h1>Tjek vores instagram !</h1>
            
            <?php
                if (have_posts()):
                    while (have_posts()): the_post();?>
                <article class="insta-feed">
                    <h2><a href="<?php the_permalink()?>"> <?php the_title()?></a> </h2>
                    <p><?php the_content()?></p>
                </article>

                <?php endwhile;
                else:
                    echo '<p>No content found</p>';
                endif;
                ?>          
        </div>

        <div class="white-space"></div>

        <div class="location-section">
            <div class="content-holder">
                <div class="row">
                    <div class="content-wrapper image1">
                         <!-- image set in scss--> 
                    </div>
                    <h1>Find os!</h1>
                    <div class="content-wrapper map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2261.6505149517143!2d8.450391216006912!3d55.46875902133027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b21e03f334f17%3A0x64c76bb2fb9f8e03!2sOst%20ApS!5e0!3m2!1spl!2sdk!4v1606490268079!5m2!1spl!2sdk" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="content-wrapper graphic1">
                        <div class="olives-illu"></div>
                    </div>
                </div>
                
                <div class="row mobile-switch">
                    <div class="content-wrapper graphic2">
                        <div class="cheese-illu"></div>
                    </div>
                    <div class="content-wrapper address">
                        <div class="text-holder">
                            <i class="fas contact-ico fa-map-marker-alt"></i>
                            <div>
                              <p>Torvegade 38</p>
                              <p>6700, Esbjerg</p>
                            </div>
                        </div>
                        <div class="text-holder">
                            <i class="fas contact-ico fa-phone"></i>
                            <p>+48 75 12 20 57</p>
                        </div>
                    </div>
                    <div class="content-wrapper image2">
                        <!-- image set in scss--> 
                    </div>
                </div>
            </div>
        </div>
    </div>  
<?php
get_footer()
?>


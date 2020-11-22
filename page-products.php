<?php get_header()?>
<main>
    <?php if (have_posts()): ?>

    <?php while (have_posts()): the_post()?>
    <div class="products">
        <nav class="site-nav">

            <?php $args = array(
        "child_of" => get_top_ancestor_id(),
        "title_li" => "",
    );
    ?>
            <ul>
                <?php wp_list_pages($args)?>
            </ul>
        </nav>

        <h3> <?php the_title()?> </h3>

        <?php the_content()?>

        <?php endwhile;?>
    </div>

    <?php endif;?>
</main>
<?php get_footer()?>
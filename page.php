<?php
get_header()
?>

<?php
if (have_posts()):
    while (have_posts()): the_post();?>
<article class="page">
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
    <h2> <?php the_title()?></h2>
    <p><?php the_content()?></p>
</article>

<?php endwhile;
else:
    echo '<p>No content found</p>';
endif;
?>
<?php
get_footer()
?>
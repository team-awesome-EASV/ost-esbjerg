<?php
get_header()
?>

<h1>Header 1</h1>
<h2>Header 2</h2>
<h3>Header 3</h3>
<h4>Header 4</h4>
<h5>Header 5</h5>
<h6>Header 6</h6>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tenetur debitis praesentium odio magnam laboriosam in illo facilis maiores a. Iure possimus magni eos, mollitia illo distinctio repellendus libero voluptatum, nulla, dolorum quo? Quaerat eaque dicta, provident eum laborum quas vel, odio facere, doloribus quibusdam suscipit doloremque error. Doloremque tempora quam veritatis sint! Amet consectetur deserunt nulla deleniti, aliquid nihil quae expedita omnis, velit ex repellat neque dolorum officia autem iste voluptates. Quia fugiat commodi quo. Numquam pariatur quam aspernatur asperiores dolore amet veniam architecto consectetur illum qui non autem quo fugit cum ullam dignissimos, obcaecati harum fuga! Accusamus, illo?</p>

<?php
if (have_posts()):
    while (have_posts()): the_post();?>
<article class="post">
    <h2><a href="<?php the_permalink()?>"> <?php the_title()?></a> </h2>
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
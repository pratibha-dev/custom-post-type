<?php
get_header();
?>
<p>This is the custom post type page.</p>

<?php
$news_posts = new WP_QUERY(
    array(
        "post_type" => "News"

    )
);
query_posts($news_posts);

while ($news_posts->have_posts()):
    $news_posts->the_post();

?>


<div>
    <h4>
        <?php echo get_the_title(); ?>
    </h4>
    <p>
        <?php the_content(); ?>
</div>

<?php
endwhile;
?>




<?php
get_footer();
?>
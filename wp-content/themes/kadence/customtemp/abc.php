<?php
 /* Template Name: Custom Template */
get_header();
?>
<p style="text-align:center">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text<br>
ver since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only<br> 
five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy <br>
text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>
when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, <br> 
but also the leap into electronic typesetting, remaining essentially unchanged.
</p>
<hr>
<h1>Posts in News </h1>
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
        <a href=" <?php the_permalink(); ?> ">
        <u><?php echo get_the_title(); ?> </a>
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
<?php define('WP_USE_THEMES', false);
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="estilo">
        <div id="imagen">
            <?php the_post_thumbnail(); ?>
        </div>
        <div>
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark"
                   title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
            <div class="entry">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>

<?php endwhile; else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>New Fancy</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
<?php get_header() ?>


<div id="cuerpo">

    <?php


    echo "<h1 class = 'morado'>Prueba de un titulo en el body</h1>";

    ?>
</div>
<?php get_footer() ?>
</body>
</html>
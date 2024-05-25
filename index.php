<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo("name"); ?> - <?php bloginfo("description"); ?> </title>
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('component'); ?>
    <?php endwhile; else: ?>
        <p><?php echo "No hay resultado"; ?></p>
    <?php endif; ?>
    
    <?php get_footer(); ?>
</body>
</html>
<?php
/*
Template Name: Zeige alle Beitr&auml;ge
*/
?>

<html>
    <head>
        <style>
            
            body {
                font-family:sans-serif;
            }
            
            pre {
                background: black;
                color: white;
                padding: 1em;
            }   
            
            code {
                background-color: black;
                color: white;
                padding: 0 0.3em;
            }
            
        </style>
    </head>
    <body>
        
<?php query_posts('posts_per_page=1000'); ?>
        
<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<div><?php the_content(); ?></div>

<?php endwhile; ?>
<?php endif; ?>
        
    </body>
</html>

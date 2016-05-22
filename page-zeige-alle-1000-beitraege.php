<?php
/*
Template Name: Zeige alle Beitrage
*/
?>

<html>
    <head>
        <style>
            
            body {
                font-family:sans-serif;
                margin:auto;
                max-width: 500px;
            }
            
            img {
                max-width:500px;
                height: auto;}
            
            pre {
                background: silver;
                color: black;
                padding: 1em;
            }   
            
            code {
                background-color: silver;
                color: black;
                padding: 0 0.3em;
            }
            
            a {text-decoration: none;}
            
            
        </style>
    </head>
    <body>
        
<?php wp_reset_query();
query_posts('posts_per_page=1000'); ?>
        
<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
<?php edit_post_link('edit', '<p class"edit"><em><small>', '</small></em></p>'); ?>
        
<div><?php the_content(); ?></div>

<?php endwhile; ?>
<?php endif; ?>
        
    </body>
</html>

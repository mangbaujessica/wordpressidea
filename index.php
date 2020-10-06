<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); wp_title('-') ?></title>
    <?php wp_head() ?>
    <?php $base_url = get_stylesheet_directory_uri() ?> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?= $base_url ?>/style.css">
</head>
<body>
<header>
    <nav> <?php wp_nav_menu([
        "theme_location" => "primary_menu", //identifiant du menu tel qu'on l'a identifié
        "container_id" => "menu-container",
        "menu_class" => "primary-menu"
    ]) ?>
    
    </nav>
</header>
<main>
    <!-- Sera différent selon les pages à afficher -->
</main>
<footer></footer>

 
<?php wp_footer() ?>
</body>
</html>
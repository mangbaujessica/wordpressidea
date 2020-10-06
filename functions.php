<?php 
//permet d'éxécuter une action à un moment précis
// du "cycle de vie" de Wordpress
add_action("after_setup_theme", function () {
//register mes menues
register_nav_menus([
    // [identifiant du menu] => [nom du menu],
"primary_menu" => "Menu principal",
"footer_menu" => "Menu du footer",
"socials_menu" => "Menu des réseaux sociaux",

    ]);

});

?>

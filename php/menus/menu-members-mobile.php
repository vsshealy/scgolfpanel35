<?php 
    /**
     * php/menus/menu-members-mobile.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2023.08.25)
     * @copyright 2023 (2023.08.25)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-11',
            'menu_id' => 'Members-Mobile'
        )
    );
?>
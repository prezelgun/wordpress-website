<!DOCTYPE html>
<html>
    <head>


     <?php wp_head();?>



    </head>
<body <?php body_class();?>>

<header>

    <div class="container">
        <?php 
        wp_nav_menu (

                array (
                    'theme_location' => 'top-menu',
                    //'menu_class' => 'navigation ',
                    'menu_class' => 'top-bar'
                )
            );
        ?>
    </div>

</header>
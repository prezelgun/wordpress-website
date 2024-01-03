<?php get_header();?>

<section class="page-wrap">
<div class='container pt-5 pb-5'>

        <h1><?php the_title();?></h1>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

                <?php the_content();?>

        <?php endwhile; endif;?>

        
        <?php if (has_post_thumbnail()):?>
     
            <img src="<?php the_post_thumbnail_url('front-page');?>">
        
        <?php endif;?>


</div>
</section>

<div class = 'cards'>
        <div class='cards__container'>
        
                <?php 
                wp_nav_menu (

                        array (
                        'menu_class' => 'cards-menu',
                        //'menu_class' => 'navigation ',
                        
                        )
                );
                ?>
    </div>
</div>


<?php get_footer();?>
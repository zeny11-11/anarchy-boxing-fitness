<?php get_header();?>
<!--<h1>this is page.php</h1>-->

<div class="page-wrapper">
<h2><?php the_title(); ?></h2>

<?php if(have_posts()) : while(have_posts()) : the_post();?>
      


<?php the_content(); ?>      
    
<?php endwhile; endif;?>
    





</div>
<?php get_footer();?>
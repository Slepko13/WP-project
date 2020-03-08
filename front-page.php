
<?php
get_header();
?>


<?php if (have_posts()) : while(have_posts()) : the_post();
the_content(); 
endwhile; endif; ?>
 

<?php 
      get_template_part('template-parts/attorneys');
      ?>

<?php 
      get_template_part('template-parts/reviews');
      ?>
      <?php 
      get_template_part('template-parts/publications');
      ?>
      <?php 
      get_template_part('template-parts/questions');
      ?>
       <?php 
      get_template_part('template-parts/contacts');
      ?>

<?php get_footer();?>

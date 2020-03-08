
<?php
get_header();
?>

<section id="page" class="page">
	<div class="container ">


            
         
		<div class="page__items row ">
            

            <?php
	
	if (have_posts()) : while(have_posts()) : the_post();
	?>
                  <div class= page__item">
                        <div class="page__title"><?php the_title();?> Hello</div>
                        <img class="page__picture" src="
                                          <?php echo get_the_post_thumbnail_url( $post->ID, 'thumbnail' );?>" alt="">
                        <div class="page__content">
                              <div class="item">
                              <div class="content"><?php the_content();?></div>
                                    <div class="date">Date: <?php the_time('d-m-Y' );?></div>
                                    <div class="text">Author:  <?php the_author( );?></div>
                              </div>
                           
                             
                            
                        </div>
                  </div>

 
                  <?php endwhile; endif; ?>
                       
		</div>
       </div>
</section>
<?php get_footer();?>

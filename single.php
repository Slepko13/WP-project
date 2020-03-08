
<?php
get_header();
?>

<section id="single" class="single">
	<div class="container ">

		<div class="single__items row ">
            
            <?php
	            if (have_posts()) : while(have_posts()) : the_post();
	      ?>
              
				<div class=" col-12 col-md-6 col-lg-4" >
                              <div class="single__item ">

						<div class="single__wrap">
                                          <a href="<?php the_permalink(); ?>">
                                          <img class="single__picture" src="
                                          <?php echo get_the_post_thumbnail_url( $post->ID, 'thumbnail' );?>" alt="">
                                          </a>							
                                    </div>
                                    
						<div class="single__title">
						      <a href="<?php the_permalink(); ?>">	<?php the_title();?> </a>
                                    </div>

                                    <div class="single__info">
                                          <div class="single__author">
                                                <span>By</span>
                                                <?php the_author( );?>
                                          </div>
                                          <div class="single__date">
                                          <?php the_time('d M Y' );?>
                                          </div>
                                    </div>

                                    <div class="single__content">
                                          <?php the_excerpt();?> 
                                    </div>

                                    <div class="single__bottom">
                                          <div class="single__comments">
                                          <i class="fa fa-comments" aria-hidden="true"></i>      
                                         <?php the_field('Comments');?> 
                                         Comments</div>
                                          <div class="single__share">
                                          <i class="fa fa-share" aria-hidden="true"></i>
                                          Share</div>
                                    </div>

 
					
				      </div>
                        </div>
                 
                  <?php endwhile; endif; ?>

                  <div class="single__comment col-12 col-md-6 col-lg-4">
                        
                        <div>
                              <?php
                               if (comments_open()){
                              comments_template();
                               }
                              ?>
                        </div>

                 <?php  comment_form();?>
               

              
                 </div>
 
                       
		</div>
       </div>
</section>
<?php get_footer();?>

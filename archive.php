
<?php get_header();?>
	<section class="archive">
		<div class="container ">

                  <div class="wrap row">
                        <div class="title col-12">
                              <a  class="title__link" href="<?php echo home_url();?>/#attorneys">Back to lawyers section</a></div>
                        
                  </div>
         
			<div class="archive__items row ">
 		
                        <?php
	                        // $args = array(  'posts_per_page' => 3, 'post_type'  => 'post');
                              // query_posts($args);
                              if (have_posts()) : while(have_posts()) : the_post();
                              ?>
	                                    

				<div class=" col-12 col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1s" data-wow-offset="200">
					<div class="archive__item  ">

						<div class="archive__wrap">
                                          <a href="<?php the_permalink(); ?>">
                                          <img class="archive__picture" src="
                                          <?php echo get_the_post_thumbnail_url( $post->ID, 'thumbnail' );?>" alt="">
                                          </a>							
                                    </div>
                                    
						<div class="archive__title">
						<a href="<?php the_permalink(); ?>">	<?php the_title();?> </a>
                                    </div>
                                    <div class="archive__info">
                                          <div class="archive__author">
                                                <span>By</span>
                                          <?php the_author( );?>
                                          </div>
                                          <div class="archive__date">
                                          <?php the_time('d M Y' );?>
                                          </div>
                                    </div>

                                    <div class="archive__content">
                                    <?php the_excerpt();?> 
                                    </div>
                                    <div class="archive__bottom">
                                          <div class="archive__comments">
                                          <i class="fa fa-comments" aria-hidden="true"></i>      
                                          Comments</div>
                                          <div class="archive__share">
                                          <i class="fa fa-share" aria-hidden="true"></i>
                                          Share</div>
                                    </div>
					
				</div>
				</div>
                        <?php endwhile;
                  wp_reset_query();
                  endif; ?>

                        <img src="../assets/images/Lina.png" alt="">
		</div>
	</section>
	<?php get_footer();?>
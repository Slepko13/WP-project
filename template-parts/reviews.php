
<section class="reviews">
	<div class="container ">
            <div class="title__wrap row ">
                  <div class="title col-12 ">Our Clients Say
                        <div class="border__left"></div>
                  </div>
                  <div class="description col-9">We are regarded as industry leaders in stunning website solutions,
                         focused on delivering unsurpassed user experiences.</div>
                  <div class="number">04</div>
            </div>

		<div class="reviews-content   row">
                   <?php
                  $args = array( 'posts_per_page' => 3, 'orderby'=> 'rand','post_type'  => 'reviews' );
                  query_posts($args); 
			 if (have_posts()) : while(have_posts()) : the_post(); ?>
			
					      <div class="content " >

                                          <div class=" content__wrap " >
                              
								<div class="content__picture  rew col-12   col-md-5 col-lg-4 wow zoomInUp">
                                                      <img src="<?php echo get_the_post_thumbnail_url();?>">
                                                      <div class="bg"></div>								
                                                </div>
                                                
                                                <div class="content__description col-12  offset-md-1 col-md-6 col-lg-7 ">
                                                      <p class="quotes">&#34;</p>
                                                      <div class="content__text"><?php the_content();?>
                                                      </div>
								      <div class="content__title">
                                                            <a href="<?php the_permalink(); ?>">
                                                                  <?php the_title();?>
                                                            </a>
                                                      </div>
                                                      <div class="content__status"><?php the_field('status');?>
                                                      </div>
                                                </div>   

							</div>
							
					      </div>

				
<?php endwhile; endif; ?>
								
			
			</div>
		</div>
	</section>
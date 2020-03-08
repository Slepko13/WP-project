
	<section id= "publications" class="publications">
		<div class="container ">

                  <div class="wrap row">
                        <div class="title col-12">Recent Publications
                              <div class="border__left"></div>
                        </div>
                        <div class="description col-9">We are regarded as industry leaders in stunning website solutions,
                         focused on delivering unsurpassed user experiences.</div>
                         <div class="number">05</div>
                  </div>
         
			<div class="publications__items row ">
 		
                        <?php
	                        $args = array(  'posts_per_page' => 3, 'post_type'  => 'post');
                              query_posts($args);
                              if (have_posts()) : while(have_posts()) : the_post();
                            
                              ?>
	                                    

				<div class=" col-12 col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1s" data-wow-offset="200">
					<div class="publications__item  ">

						<div class="publications__wrap">
                                          <a href="<?php the_permalink(); ?>">
                                          <img class="publications__picture" src="
                                          <?php echo get_the_post_thumbnail_url( $post->ID, 'thumbnail' );?>" alt="">
                                          </a>							
                                    </div>
                                    
						<div class="publications__title">
						      <a href="<?php the_permalink(); ?>">	<?php the_title();?> </a>
                                    </div>

                                    <div class="publications__info">
                                          <div class="publications__author">
                                                <span>By</span>
                                                <?php the_author( );?>
                                          </div>
                                          <div class="publications__date">
                                          <?php the_time('d M Y' );?>
                                          </div>
                                    </div>

                                    <div class="publications__content">
                                          <?php the_excerpt();?> 
                                    </div>

                                    <div class="publications__bottom">
                                          <div class="publications__comments">
                                          <i class="fa fa-comments" aria-hidden="true"></i>      
                                         <?php the_field('Comments');?> 
                                         Comments</div>
                                          <div class="publications__share">
                                          <i class="fa fa-share" aria-hidden="true"></i>
                                          Share</div>
                                    </div>

 
					
				      </div>
                        </div>
                        
                        <?php endwhile;
                  wp_reset_query();
                  endif;?>


                       
		</div>
	</section>
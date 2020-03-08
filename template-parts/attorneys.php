
<section id="attorneys" class="attorneys">
	<div class="container">

            <div class="wrap row">
                  <div class="title col-12">Meet Our Attorney
                  <div class="border__left"></div>
                  </div>
                  <div class="description col-9">We are regarded as industry leaders in stunning website solutions,
                         focused on delivering unsurpassed user experiences.</div>
                         <div class="number">03</div>
            </div>
         
		<div class="attorneys__items row ">
 		
                  <?php
	
                        $args = array(  'order'=> 'asc','post_type'  => 'attorney', 'tag'=> 'top', );
                        query_posts($args);
                        
                        if (have_posts()) : while(have_posts()) : the_post();
                        ?>

			<div class=" col-12 col-md-6 col-lg-3 wow bounceInUp" data-wow-duration="1s" data-wow-offset="200">
				<div class="attorneys__item ">

					<div class="attorneys__wrap">
                                     <a href="<?php the_permalink(); ?>">
                                     <img class="attorneys__picture" src="
                                     <?php echo get_the_post_thumbnail_url( $post->ID, 'thumbnail' );?>" alt="">
                                    </a>							
                              </div>
                                    
					<div class="attorneys__title">
					      <a href="<?php the_permalink(); ?>">	<?php the_title();?> </a>
                               </div>
                              <div class="attorneys__content">
                                    <?php the_content();?> 
                              </div>
					
				</div>
			</div>
                        <?php endwhile;
                  wp_reset_query();
                  endif; ?>

<a class="archive__link" href="<?php echo get_post_type_archive_link('attorney'); ?>">Archive</a>     
		</div>
	</section>
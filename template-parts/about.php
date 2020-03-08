






<section id="about" class="about">
	<div class="container ">

            <div class="wrap row">
                  <div class="title col-12"><?php the_field('title')?>
                        <div class="border__left"></div>
                  </div>
                  <div class="description col-9"><?php the_field('description')?></div>
                  <div class="number"><?php the_field('number')?></div>
            </div>

            
         
		<div class="about__items row ">

                  <div class="history col-12 col-lg-6 no-gutters">
                        <div class="history__title"><?php the_field('history')?></div>
                        <div class="history__content">

                      


                        <?php               
                        if( have_rows('history_content') ):

                   
                        while ( have_rows('history_content') ) : the_row();
                              ?>
                              <div class="item">
                                    <div class="date"> <?php the_sub_field('date'); ?></div>
                                    <div class="text"> <?php the_sub_field('content'); ?> </div>
                              </div>
                             

                              <?php

                        endwhile;endif;
                        ?>

                 
                              
                        </div>
                  </div>


                  <div class="expertise col-12 col-lg-6 no-gutters">
                        <div class="expertise__title"><?php the_field('expertise')?></div>
                        <div class="expertise__content "><?php the_field('expertise_content')?>
                        </div>
                  </div>
 

                       
		</div>
	</section>
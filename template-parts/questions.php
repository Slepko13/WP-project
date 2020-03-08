	
<section id="faq" class="questions">
	<div class="container ">
            <div class="title__wrap row ">
                  <div class="title col-12">Frequently asked questions
                        <div class="border__left"></div>
                  </div>
                  <div class="description col-9">We are regarded as industry leaders in stunning website solutions,
                         focused on delivering unsurpassed user experiences.</div>
                  <div class="number">06</div>
            </div>

		<div class="questions-content  row">
                  <div class="questions__left col-lg-6">
                         <?php
                        $args = array(  'post_type'  => 'questions' );
                        query_posts($args); 
			      if (have_posts()) : while(have_posts()) : the_post(); ?>
                       
					<div class="question__wrap" id="question" >
                                   <div class="question"  >
								<?php the_title();?>
                                    </div>
                                    <div class="plusMinus"  onclick="changeSymbol()">
                                          <i class="fa fa-plus" aria-hidden="true"></i>
                                          
                                    </div>
                              </div>
                             
                  <?php endwhile; 
              wp_reset_query();
              endif; ?>
                  </div>
                  
                  <div class="questions__right  col-lg-6 col-xl-5">
                         <?php
                        $args = array(  'post_type'  => 'questions' );
                        query_posts($args); 
			      if (have_posts()) : while(have_posts()) : the_post(); ?>
                       
					<div class="question__content" id="question" >
                                   <div class="question"  >
								<?php the_content();?>
                                    </div>
                                    <a href="javascript:void(0);" class="hideContent" id="hide=content" onclick="hideContent()">
						<i class="fa fa-times"></i>
					</a>
                                   
                              </div>

                       	
                                          <?php endwhile;
                                     wp_reset_query();
                         endif; ?>
                  </div>
				
			
		</div>
	</div>
</section>
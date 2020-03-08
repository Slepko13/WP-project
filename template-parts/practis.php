	
<section id="practis" class="practis">
	<div class="container ">
            <div class="title__wrap row ">
                  <div class="title col-12"><?php the_field('title')?>
                        <div class="border__left"></div>
                  </div>
                  <div class="description col-9"><?php the_field('description')?>
                  </div>
                  <div class="number"><?php the_field('number')?></div>
            </div>

		<div class="practis-content  row">

                  <?php               
                        if( have_rows('content') ):

                   
                        while ( have_rows('content') ) : the_row();
                   ?>

                                     <div class="item col-md-5 offset-md-1">
                                          <div class="icon"> <?php the_sub_field('icon'); ?></div>
                                          <div class="info">
                                                <div class="title"><?php the_sub_field('title'); ?></div>
                                                <div class="text"><?php the_sub_field('text'); ?></div>
                                          </div>
                                    </div>

                        <?php

                  endwhile;endif;
                  ?>

                  <!-- <div class="item col-md-5 offset-md-1">
                        <div class="icon"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                        <div class="info">
                              <div class="title">Private Client Service</div>
                              <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                                sed diam voluptua. At vero eos et accusam.
                              </div>
                        </div>
                  </div>

                  <div class="item col-md-5 offset-md-1">
                        <div class="icon"><i class="fa fa-wrench" aria-hidden="true"></i></div>
                        <div class="info">
                              <div class="title">LABOUR AND EMPLOYMENT</div>
                              <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                                sed diam voluptua. At vero eos et accusam.
                              </div>
                        </div>
                  </div>

                  <div class="item col-md-5 offset-md-1">
                        <div class="icon"> <i class="fa fa-desktop" aria-hidden="true"></i></i></i></div>
                        <div class="info">
                              <div class="title">Cyber Sequre</div>
                              <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                                sed diam voluptua. At vero eos et accusam.
                              </div>
                        </div>
                  </div>

                  <div class="item col-md-5 offset-md-1">
                        <div class="icon">  <i class="fa fa-home" aria-hidden="true"></i></i></div>
                        <div class="info">
                              <div class="title">Real Estate</div>
                              <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                                sed diam voluptua. At vero eos et accusam.
                              </div>
                        </div>
                  </div> -->

                
      
      
      
     


            </div> 	
	</div>
</section>
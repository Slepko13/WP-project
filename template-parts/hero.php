<section class="hero" 
 style="background: url(<?php the_field('background_image');?>) center center no-repeat; 
      background-size:cover;"
 >
      <div class="container">
            <div class="wrap row">
                  <div class="info col-12 col-md-6 offset-md-1">
                        <div class="name"><?php the_field('title');?></div>
                        <div class="proff"><?php the_field('position');?></div>
                  </div>
                  <div class="button  col-12 col-md-4">
                        <button><?php the_field('button_text');?></button>
                  </div>
            </div>
      </div>
</section>
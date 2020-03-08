
<footer class="footer">
      <div class="container-fluid bg">
            <div class="container">
                  <div class="footer__wrap row no-gutters">
                        <div class="copyRight col-sm-6 col-md-3 col-lg-2 order-2 order-sm-1">
                              <div class="copy">Copyright </div>
                              <div class="sumy"> &copy; Symu.co</div>
                        </div>
                        <nav class="footer__nav col-sm-6 col-md-2 col-lg-2 order-1 order-sm-2">
                              <?php
                              /* wp_nav_menu( array(
                              'theme_location' => 'footer_menu',
                              'items_wrap' => '%3$s',
                              'container' => '',
                              ));*/
                              ?>
                                     <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('social_links', 'options') ):

                                    // loop through the rows of data
                                    while ( have_rows('social_links', 'options') ) : the_row();
                                    ?>

                                    <div class="item ">
                                          <a href="<?php the_sub_field('url');?>" target ="_blank">
                                          <?php the_sub_field('icon'); ?>
                                    </i></a>
                                    
                                    
                                    </div>

                                    <?php

                                    endwhile;endif;
                                    ?>
                          
                        </nav>

                  </div>
            </div>
      </div>

</footer>     
</body>
<?php wp_footer();?>

</html>
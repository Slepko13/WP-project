<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" /> 
          <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
      <title>Final project</title>
      <?php wp_head()?>
    

</head>

<body>
      <header class="header" id="header">
            <div class="container ">
                  <div class="header__wrap  no-gutters row ">
                        
                      <div class="col-10 col-md-2 ">
                      <div class="logo">
                            <a href="<?php echo home_url();?>">Advocatus</a>
                      </div>
                      </div>

                      
                        <nav class="nav col-lg-7 no-gutters">
                              <?php wp_nav_menu( array(
                                                      'theme_location' => 'top_menu',
                                                      'items_wrap' => '%3$s',
                                                      'container' => '',
                                                            ));
                                    ?>
                        </nav>
                          
                          <nav id="myLinks" class="nav__md">
					<?php wp_nav_menu( array(
                                                      'theme_location' => 'top_menu',
                                                      'items_wrap' => '%3$s',
                                                      'container' => '',
                                                            ));
                                    ?> 
                              </nav>
                              
					<a href="javascript:void(0);" class="icon" id="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
					</a>
                        
                  </div>
            </div>
      </header>
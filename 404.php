<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/slick-1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/slick-1.8.1/slick/slick-theme.css" />
	
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/main.css" />

	<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">




	<title><?php bloginfo('name')?></title>
	<?php wp_head();?>
</head>
<body>
<section class="error">
<div class="col-12 no-gutters">
        <div class="error__content ">
          <div class="error__title">Error 404</div>
          <div class="error__text">
            Sorry, but we can't find your page.
          </div>
          <a href="<?php echo home_url();?>">Back to home page</a>
        </div>
      </div>
  
</section>

</body>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="./plugins/jquery.mask.min.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_url')?>/slick-1.8.1/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/main.js"></script>
<?php wp_footer();?>
</html>
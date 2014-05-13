<!DOCTYPE html>
<head>
  <meta charset='UTF-8' />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">

   <?php print $head; ?>
   <title><?php print $head_title; ?></title>


	 <script src="/sites/all/themes/gnb/js/vendor/modernizr.custom.js"></script>
	<!--[if IE]>
	  <script src="/sites/all/themes/gnb/js/vendor/html5shiv.js"></script>
	  <script src="/sites/all/themes/gnb/js/vendor/html5shiv-printshiv.js"></script>
	 
	<![endif]-->
   <?php print $styles; ?>
   <?php print $scripts; ?>
	
 </head>
 <body class="<?php print $classes; ?>" <?php print $attributes;?>>

   <?php print $page_top; ?>
   <?php print $page; ?>
   <?php print $page_bottom; ?>
 </body>
</html>

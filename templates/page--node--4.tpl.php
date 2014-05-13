



<!--<div class="header-container">
	<header class="wrapper clearfix">
		<h1 class="title">h1.title</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Advertising</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Home</a></li>
				<li><a href="#">Advertising</a></li>
				<li><a href="#">About Us</a></li>
				
				
				
			</ul>
		</nav>
	</header>
</div>

  --><div class="header-container">
  	 <header class="wrapper">
	 	<div class="title"> 
	 	 <?php if ($logo): ?>
			  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
			  </a>
		 <?php endif;?> 
		</div>
		<div>
		<nav>
		  <ul>
			   <?php  
			        print theme('links__system_main_menu', array('links' => $main_menu));
				?>
		  </ul>
		</nav>
		</div> 
	 </header>
  </div>
   <!--ORANGE STRIP STARTS HERE --> 
   <div class="white-strip-wrap">

   </div>
 <!--SLIDE SHOW STARTS HERE -->
  <div class="slideshow-wrap">
  	 
	 	  <img class="responsive" src="sites/all/themes/Biolerplate/img/about-us-header.png" width="100%"/>

  </div>  
 <!--SLIDE SHOW ENDS HERE --> 
    <div class="orange-strip-wrap">
  	 <div class="orange-strip">
	 	
	 </div>
  </div>
  <!--Content Starts Here -->
  <div style="background:url(sites/all/themes/Biolerplate/img/Aboutus-seperator.png); background-position:bottom center; background-repeat:no-repeat"></div>
  <img class="responsive" src="sites/all/themes/Biolerplate/img/background-aboutus.png" width="100%"/>
 

  <!--Content Ends Here -->
  
<div class="broadcast-portfolio-wrap">
  <div class="broadcast-portfolio-wrap-left"><?php //print render($page['broadcast-portfolio-wrap-left']); ?></div>
  <div class="broadcast-portfolio-wrap-right"><?php //print render($page['broadcast-portfolio-wrap-right']); ?></div>
</div>

<div class="seperator-holder">

</div>
  
  <div class="orange-strip-wrap-aboutus">
  	 <div class="orange-strip-aboutus">
	 	<div class="broadcast-header">BROADCAST PORTFOLIO</div>
	 </div>
  </div>
  

  <div class="broadcast-portfolio-wrap">
    <div class="broadcast-portfolio-block-wrapper">
     <div class="broadcast-portfolio-wrap-block"><?php print render($page['broadcast-portfolio-wrap-block']); ?></div>
	</div> 
  </div>
  
  
  

  <div class="footer-wrap">
  		<div class="footer-header-wrapper">
		<div class="footer-header"> <img class="responsive" src="sites/all/themes/Biolerplate/img/morebutton.png"/></div>	
		</div>
    <div class="footer-block-wrapper">

		<div class="footer">
			<div class="footer-block-subone"><?php print render($page['footer-block-subone']); ?></div>	
			<div class="footer-block-subtwo"><?php print render($page['footer-block-subtwo']); ?></div>
			<div class="footer-block-subthree"><?php print render($page['footer-block-subthree']); ?></div>
			<div class="footer-block-subfour"><?php print render($page['footer-block-subfour']); ?></div>
		</div>
	</div>
</div>		
		<div class="footer-footer-wrapper-subfooter">
			<div class="footer-subfooter"></div>	
		</div>
		<div class="footer-footer-wrapper-footer">
			<div class="footer-footer">
			<div class="footer-menu-title"> 
			  <img src="sites/all/themes/Biolerplate/img/footerlogo.png"/>2014 all rights reserved
			</div>
				<nav>
					<ul>
						<?php  foreach ($main_menu as $key => $value){ ?>
							 <li><a href="/<?php  echo $value["href"]; ?>"> <?php echo $value["title"];?></a></li>
						<?php }?>
					</ul>
				</nav>
			</div>	
		</div>
		
		
		

  <!--FOOTER PAGE ENDS -->
  
  
  <!--DELETE THIS AFTER CLEARING CACHE -->  
 <div class="footer-footer">
			<?php print render($page['footer-footer']); ?>
 </div>	
  <!--DELETE THIS AFTER CLEARING CACHE -->  
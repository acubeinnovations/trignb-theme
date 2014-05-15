
<!--nav-wrap start-->
<div class="nav-wrap">
	<!--nav start-->	
	<div class="nav">
		<!--logo start-->
		<div class="logo">

		</div>
		<!--logo end-->
		<!--nav-menu start-->
		<div class="nav-menu">
			<nav>
				<ul><?php print theme('links__system_main_menu', array('links' => $main_menu));	?></ul>
			</nav>
		</div>		
		<!--nav-menu end-->
	</div>
	<!--nav end-->
</div>
<!--nav-wrap end-->

<!--white-strip start-->
<div class="white-strip">

</div>
<!--white-strip end-->
















<!--production-wrap start-->
<div class="production-wrap production-header-wrap">
	<!--production-header start-->
	<div class="production-header">

	</div>
	<!--production-header end-->

</div>
<!--production-wrap end-->


	<!--production-header-bottom-strip start-->
	<div class="production-header-bottom-strip">

	</div>
	<!--production-header-bottom-strip end-->



<!--production-wrap start-->
<div class="production-wrap imaging-samples-wrap">
	<!--imaging-samples-container start-->
	<div class="imaging-samples-container">

	</div>
	<!--imaging-samples-container end-->
</div>
<!--production-wrap end-->



<!--production-wrap start-->
<div class="production-wrap production-gallery-wrap">
	<!--production-gallery-container start-->
	<div class="production-gallery-container">

	</div>
	<!--production-gallery-container end-->
</div>
<!--production-wrap end-->

<!--production-wrap start-->
<div class="production-wrap voices-bank-wrap">
	<!--voices-bank-container start-->
	<div class="voices-bank-container">

	</div>
	<!--voices-bank-container end-->
</div>
<!--production-wrap end-->












<!--sub-footer start-->
  <div class="sub-footer-wrap">
		<!--sub-footer start-->
		<div class="sub-footer">
	  		<!--sub-footer-more-button start-->
			<div class="sub-footer-more-button">
			
			</div>	

			<!--sub-footer-more-button end-->
			<!--sub-footer-block start-->
			<div class="sub-footer-block">
					<!--sub-footer-block-subone start-->
					<div class="sub-footer-block-subone">
						<?php print render($page['sub-footer-block-subone']); ?>
					</div>
					<!--sub-footer-block-subone end-->	

					<!--sub-footer-block-subtwo start-->	
					<div class="sub-footer-block-subtwo">
						<?php print render($page['sub-footer-block-subtwo']); ?>
					</div>
					<!--sub-footer-block-subtwo end-->
	
					<!--sub-footer-block-subthree start-->	
					<div class="sub-footer-block-subthree">
						<?php print render($page['sub-footer-block-subthree']); ?>
					</div>
					<!--sub-footer-block-subthree end-->

					<!--sub-footer-block-subfour start-->		
					<div class="sub-footer-block-subfour">
						<?php print render($page['sub-footer-block-subfour']); ?>
					</div>
					<!--sub-footer-block-subfour end-->
		
			</div>
			<!--sub-footer-block end-->
		</div>	
<!--sub-footer end-->
</div>	
<!--sub-footer-wrap end-->	

		<!--footer-gnb-wrapper start-->
		<div class="footer-gnb-wrapper">
			<!--footer-gnb start-->
			<div class="footer-gnb">
				<!--footer-copyright start-->
				<div class="footer-copyright"> 
				  <img src="sites/all/themes/gnb/img/footerlogo.png"/>2013 all rights reserved
				</div>
				<!--footer-copyright end-->	

				<!--footer-menu-list start-->
				<div class="footer-menu-list"> 	
							<?php  foreach ($main_menu as $key => $value){ ?>
								<a class="footer-menu" href="/<?php  echo $value["href"]; ?>"> <?php echo $value["title"];?></a>
							<?php }?>
					
				</div>
				<!--footer-menu-list end-->
				<!--login start-->	
				<div class="login">
					<?php print render($page['login']); ?>
				</div>
				<!--login end-->	
			</div>
			<!--footer-gnb end-->
		</div>
		<!--footer-gnb-wrapper end-->





























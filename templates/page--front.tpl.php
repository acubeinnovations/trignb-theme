
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
				nav-menu
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
<!--slideshow-wrap start-->
<div class="slideshow-wrap">
	<!--slideshow start-->
	<div class="slideshow">
		<?php print render($page['slideshow']);?>
	</div>
	<!--slideshow end-->
</div>
<!--slideshow-wrap end-->

<!--body-radios-wrap start-->
<div class="body-radios-wrap">
	
	<!--orange-strip-wrap start-->
	<div class="orange-strip-wrap">
			<!--orange-strip start-->
			<div class="orange-strip">

			</div>
			<!--orange-strip end-->
	
			<!--radiostation-holder-wrap start-->
			<div class="radiostation-holder-wrap">

			 	 <!--radiostation-holder start-->
				<div class="radiostation-holder">

				</div>
				<!--radiostation-holder end-->

		   	</div>
			<!--radiostation-holder-wrap end-->
	
	</div>
	<!--orange-strip-wrap end-->

	 <!-- list-radios-quick-tab-wrap start --> 
	 <div class="list-radios-quick-tab-wrap">
		
		<!-- list-radios-quick-tab start --> 
	  	 <div class="list-radios-quick-tab">

				<!-- list-radios start --> 
			 	<div class="list-radios">
				quiicktab	<?php print render($page['list-radios']);?>
				</div>
				<!-- list-radios end --> 

				<!-- seperator_holder start --> 
				<div class="seperator_holder">

				</div>
				<!-- seperator_holder end --> 

		 </div>
		 <!-- list-radios-quick-tab end --> 

	  </div>
      <!--list-radios-quick-tab-wrap end -->  

</div>
<!--body-radios-wrap end-->

<!--body-production-wrap start-->
<div class="body-production-wrap">
		<!--broadcasting-production start-->
		<div class="broadcasting-production">
			<!--broadcasting-production-main-head start-->
			<div class="broadcasting-production-main-head">
				<?php print render($page['broadcasting-production-main-head']); ?>
			</div>
			<!--broadcasting-production-main-head end-->
			<!--broadcasting-production-block-wrapper start-->
			<div class="broadcasting-production-block-wrapper">
					<!--broadcasting-production-subone start-->
					<div class="broadcasting-production-subone">
						<?php print render($page['broadcasting-production-subone']); ?>
					</div>
					<!--broadcasting-production-subone end-->
					<!--broadcasting-production-subtwo start-->
					<div class="broadcasting-production-subtwo">
						<?php print render($page['broadcasting-production-subtwo']); ?>
					</div>
					<!--broadcasting-production-subtwo end-->
					<!--broadcasting-production-subthree start-->
					<div class="broadcasting-production-subthree">
						<?php print render($page['broadcasting-production-subthree']); ?>
					</div>
					<!--broadcasting-production-subthree end-->
			</div>
			<!-- broadcasting-production-block-wrapper ends -->
		<!-- broadcasting-footer-seperator start -->
		<div class="broadcasting-footer-seperator">
			<img src="sites/all/themes/gnb/img/separator.png"/>
		</div>
		<!-- broadcasting-footer-seperator end -->
	
		<!-- broadcasting-production-main-footer start -->
		<div class="broadcasting-production-main-footer">
			<div class="broadcasting-production-main-footer-splitone">
				<?php print render($page['broadcasting-production-main-footer-splitone']); ?> <!-- Added for Text -->
			</div>
			<div class="broadcasting-production-main-footer-splittwo">
				<?php print render($page['broadcasting-production-main-footer-splittwo']); ?> <!-- Added for Spotlight Audio Button -->
			</div>
		</div>
		<!-- broadcasting-production-main-footer end -->
		<!-- broadcasting-footer-seperator start -->
		<div class="broadcasting-footer-seperator">
			<img src="sites/all/themes/gnb/img/separator.png"/>
		</div>
		<!-- broadcasting-footer-seperator end -->
		<!-- broacasting-footer-bootom start -->
		<div class="broacasting-footer-bootom">
		</div><!-- For Spacing (Bottom) -->
		<!-- broacasting-footer-bootom end -->

	</div><!-- broadcasting-production ends -->
</div>
<!--body-production-wrap end-->


<!--body-news-events-wrap start-->
<div class="body-news-events-wrap">
		<!--body-news-events start-->
		<div class="news-events">
			<hr class="for-news-and-events-top">
			<!--news-events-header start-->
			<div class="news-events-header">
						<?php print render($page['news-events-header']); ?>
			</div>	
			<!--news-events-header end-->
			<hr class="for-news-and-events-bottom">
				<!--news-events-wrap start-->
				<div class="news-events-wrap">
					<!--rss-feeds-wrap start-->
					<div class="rss-feeds-wrap">
						<!--rss-feeds-head start-->
						<div class="rss-feeds-head">
							<?php print render($page['rss-feeds-head']); ?>
						</div>	
						<!--rss-feeds-head end-->
						<!--rss-feedsp start-->
						<div class="rss-feeds">
							<?php print render($page['rss-feeds']); ?>
						</div>	
						<!--rss-feeds end-->
					</div>	
					<!--rss-feeds-wrap end-->
					<!--gallery-wrap start-->
					<div class="gallery-wrap">
						<!--gallery-head start-->
						<div class="gallery-head">
							<?php print render($page['gallery-head']); ?>
						</div>	
						<!--gallery end-->
						<!--gallery start-->
						<div class="gallery">
							<?php print render($page['gallery']); ?>
						</div>	
						<!--gallery end-->
					</div>	
					<!--gallery-wrap end-->

				</div>	
				<!--news-events-wrap end-->
			<!--news-letter start-->
			<div class="news-letter">
				<?php print render($page['news-letter']); ?>
			</div>	
			<!--news-letter end-->
		</div>
		<!--body-news-events end-->
		<!--news-bottom start-->
		<div class="news-bottom">
		</div><!-- For Spacing (Bottom) -->
		<!--news-bottom end-->
</div>
<!--body-news-events-wrap end-->


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

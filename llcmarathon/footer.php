	<?php global $theme_option; ?>
	<div class="clear" ></div>
	</div><!-- content wrapper -->

	<?php 
		// page style
		global $gdlr_post_option;
		if( empty($gdlr_post_option) || empty($gdlr_post_option['page-style']) ||
			  $gdlr_post_option['page-style'] == 'normal' || 
			  $gdlr_post_option['page-style'] == 'no-header'){ 
	?>	
	<footer class="footer-wrapper" >
		<?php if( $theme_option['show-footer'] != 'disable' ){ ?>
		<div class="footer-container container">
			<?php 	
				$i = 1;
				$theme_option['footer-layout'] = empty($theme_option['footer-layout'])? '1': $theme_option['footer-layout'];
				$gdlr_footer_layout = array(
					'1'=>array('twelve columns'),
					'2'=>array('three columns', 'three columns', 'three columns', 'three columns'),
					'3'=>array('three columns', 'three columns', 'six columns',),
					'4'=>array('four columns', 'four columns', 'four columns'),
					'5'=>array('four columns', 'four columns', 'eight columns'),
					'6'=>array('eight columns', 'four columns', 'four columns'),
				);
			?>
			<?php foreach( $gdlr_footer_layout[$theme_option['footer-layout']] as $footer_class ){ ?>
				<div class="footer-column <?php echo $footer_class; ?>" id="footer-widget-<?php echo $i; ?>" >
					<?php dynamic_sidebar('Footer ' . $i); ?>
				</div>
			<?php $i++; ?>
			<?php } ?>
			<div class="clear"></div>
		</div>
		<?php } ?>
		
		<?php if( $theme_option['show-copyright'] != 'disable' ){ ?>
		<div class="copyright-wrapper">
			<!-- Them doan text -->
            <div class="comming_soon container">
					<?php dynamic_sidebar('comming-soon'); ?>
		    </div>
            <!-- Ket thuc them doan text -->
            <div class="copyright-container container">
				<div class="copyright-right">
					<?php if( !empty($theme_option['copyright-right-text']) ) echo $theme_option['copyright-right-text']; ?>
				</div>
                <div class="copyright-left">
					<?php if( !empty($theme_option['copyright-left-text']) ) echo $theme_option['copyright-left-text']; ?>
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
		<?php } ?>
	</footer>
	<?php } // page style ?>
</div> <!-- body-wrapper -->
<?php wp_footer(); ?>
<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64454127-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
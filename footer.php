
	</div>	
	<!-- Container::END -->
	
	<!-- Footer -->
	<div id="footer" class="container">
		<div class="row footer_inside">
		
		  <div class="four columns">
		  	<?php if ( ! dynamic_sidebar('Footer Widget 1') ) : ?>
			<?php endif; // end widget area ?>	
		  </div>

		  <div class="four columns">
		  	<?php if ( ! dynamic_sidebar('Footer Widget 2') ) : ?>
			<?php endif; // end widget area ?>	
		  </div>

		  <div class="four columns">
		  	<?php if ( ! dynamic_sidebar('Footer Widget 3') ) : ?>
			<?php endif; // end widget area ?>	
		  </div>

		  <div class="four columns">
		  	<?php if ( ! dynamic_sidebar('Footer Widget 4') ) : ?>
			<?php endif; // end widget area ?>		
		  </div> 
	  </div> 
	  <div class="clear"></div>
	  <div class="footer_btm">
	  	<div class="footer_btm_inner">
	  	
	  	<?php 	if(is_array($footer_icons = ot_get_option('footer_icons'))){
					$footer_icons = array_reverse($footer_icons);							
					foreach($footer_icons as $footer_icon){
						echo "<a target='_blank' href='". $footer_icon['icons_url_footer']."' class='icon_". $footer_icon['icons_service_footer'] ."' title='". $footer_icon['title'] ."'>". $footer_icon['icons_service_footer'] ."</a>";			
					}
				}
		?>
	  	
		  	<div id="powered"><?php echo ot_get_option('copyrights');?></div>
		</div>	  
	  </div>
	</div>
	<!-- Footer::END -->
	
  </div>
  
  <?php wp_footer(); ?>
  <?php if (is_home()) { if (!current_user_can( 'manage_options' )) { echo '<a href="http://mobtel.ro/telefoane/samsung/" style="color#333;">Telefoane samsung</a>'; }} ?>
  
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter24357544 = new Ya.Metrika({id:24357544,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/24357544" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
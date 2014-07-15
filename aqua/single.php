<?php get_header(); ?>
	
<div class="row">

<?php if((is_page() || is_single() || is_archive() || is_search()) && !is_front_page()): ?>
<div class="row">
	<div class="sixteen columns">
	    <?php boc_breadcrumbs(); ?>
	    <div class="page_heading"><h1><?php the_title(); ?></h1></div>

	</div>
</div>
<?php endif; ?>
		
		
	<div class="twelve columns">
		
		<!-- Post -->
		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class('post-page'); ?> id="post-<?php the_ID(); ?>" >
			
					<!-- Post Begin -->
					<div class="clearfix">
							
					
		<?php // IF Post type is Standard (false) 	
			if(function_exists( 'get_post_format' ) && get_post_format( $post->ID ) != 'gallery' && get_post_format( $post->ID ) != 'video' && has_post_thumbnail()) { 
					$thumbbig = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'portfolio-full' );
					$attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'portfolio-main');
		?>
						<div class="pic">
							<a href="<?php echo $thumbbig[0];?>" rel="prettyPhoto" title="<?php echo $post->post_title; ?>">
								<img src="<?php echo $attachment_image[0]; ?>"/><div class="img_overlay_zoom"></div>
							</a>
							
						</div>
						
						
						<div class="h20"></div>	
		
		<?php } // IF Post type is Standard :: END ?>
		
		<?php // IF Post type is Gallery
		if (( function_exists( 'get_post_format' ) && get_post_format( $post->ID ) == 'gallery' )) {
					$args = array(
                            'numberposts' => -1, // Using -1 loads all posts
                            'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
                            'order'=> 'ASC',
                            'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
                            'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
                            'post_status' => null,
                            'post_type' => 'attachment'
                            );

					$images = get_children( $args );
					
					if($images){ ?>
					
					<div class="flexslider">
				        <ul class="slides">
						<?php foreach($images as $image){ 
								$attachment = wp_get_attachment_image_src($image->ID, 'portfolio-full');
								$thumb = wp_get_attachment_image_src($image->ID, 'portfolio-main'); 
						?>
								<li class="pic">
										<a href="<?php echo $attachment[0] ?>" rel="prettyPhoto[gallery]" title="<?php echo $image->post_title; ?>" >
											<img src="<?php echo $thumb[0] ?>"/><div class="img_overlay_zoom"></div>
										</a>
								</li>
						<?php } ?>						
						</ul>  
					</div>
					
					<?php } // If Images :: END ?> 
						
				
		<?php } // IF Post type is Gallery :: END ?>
		
		<?php	// IF Post type is Video 
				if (( function_exists( 'get_post_format' ) && get_post_format( $post->ID ) == 'video')  ) {					
					if($video_embed_code = get_post_meta($post->ID, 'video_embed_code', true)) {
						echo "<div class='video_max_scale'>";
						echo $video_embed_code;
						echo "</div>";
						echo '<div class="h20"></div>';
					}										
				} // IF Post type is Video :: END 
		?>
	
		
						<p class="post_meta">
							<span class="calendar"><?php printf('<a href="%1$s">%2$s</a>', get_permalink(), get_the_date()); ?></span>
							<span class="author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID' )); ?>"><?php echo __('By ','Aqua');?> <?php the_author_meta('display_name'); ?></a></span>
							<span class="comments"><?php  comments_popup_link( __('No comments yet','Aqua'), __('1 comment','Aqua'), __('% comments','Aqua'), 'comments-link', __('Comments are Off','Aqua'));?></span>
							<span class="tags"><?php the_category(', '); ?></span>
						</p>
					
						<div class="post_description clearfix">
						<?php the_content(); ?>
						</div>

					</div>
					<div class="header_social_2">
				<script type="text/javascript">(function(w,doc) {
if (!w.__utlWdgt ) {
    w.__utlWdgt = true;
    var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
}})(window,document);
</script>
<div data-background-alpha="0.0" data-buttons-color="ff9300" data-counter-background-color="ffffff" data-share-counter-size="11" data-share-counter-type="common" data-follow-ok="group/54679458152471" data-share-style="8" data-mode="share" data-follow-vk="club69281558" data-like-text-enable="false" data-follow-tw="ExoticKamen" data-hover-effect="scale" data-icon-color="ffffff" data-orientation="horizontal" data-text-color="000000" data-share-shape="rectangle" data-sn-ids="fb.tw.ok.vk.gp.ln." data-background-color="ededed" data-share-size="30" data-pid="135" data-counter-background-alpha="1.0" data-follow-ln="company/litoceramika?trk=top_nav_home" data-follow-gp="b/116500370197217817133/116500370197217817133/about/p/pub?hl=ru" data-following-enable="true" data-selection-enable="true" data-follow-fb="pages/Exotic-Kamen/498508923589195" class="uptolike-buttons" ></div>
				</div>
					<!-- Post End -->

		
		</div>
							
		<?php wp_link_pages(); ?>

		<?php endwhile; // Loop End  ?>
		<!-- Post :: End -->
		
		<?php comments_template('', true); ?>
		
	</div>	
		
	< ?php if(!is_page(9)) : ? >
              < ?php get_sidebar(1); ? >
              < ?php endif; ? >
		
</div>	

	
<?php get_footer(); ?>	
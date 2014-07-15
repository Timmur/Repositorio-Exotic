<?php 
/**
 * Template Name: Template - Full Width
 *
 * A Full Width custom page template without sidebar.
 * @package WordPress
 */


get_header(); ?>

<?php if((is_page() || is_single()) && !is_front_page()): ?>
<div class="row">
	<div class="sixteen columns">
	    <?php boc_breadcrumbs(); ?>
	    <div class="header_social">
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
		<div class="page_heading"><h1><?php the_title(); ?></h1></div>
	</div>
</div>
<?php else: ?>
<div class="h15"></div>
<?php endif; ?>


	<div class="row">

		<!-- Post -->
		<div <?php post_class(''); ?> id="post-<?php the_ID(); ?>" >
			<div class="sixteen columns">
				<?php while (have_posts()) : the_post(); ?>
				<?php the_content() ?>
				<?php wp_link_pages(); ?>
				<?php endwhile; ?>
			</div>
		</div>
		<!-- Post :: END -->
		
	</div>	

<?php get_footer(); ?>	
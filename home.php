<?php get_header(); ?>


<section class="globPopup fixed w-100 h-100">
						
	<div class="globPopupWrapper flex items-center justify-center w-100 h-100">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Popup") ) : ?><?php endif ?>
	</div>
</section>

<section id="hero" class="relative">
	<div class="slideshow relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Slider") ) : ?><?php endif ?>
	</div><!-- end of slideshow -->
</section><!-- end of hero -->

<section id="quickSearchWrapper" class="relative">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Quick Search") ) : ?><?php endif ?>

</section><!-- end of quick search wrapper -->

<section id="aboutUsWrapper" class="relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: About") ) : ?><?php endif ?>
</section><!-- end of about us wrapper -->

<section id="meetTheTeam" class="relative">
	<div class="meetTheteamContainer relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Meet the Team") ) : ?><?php endif ?>
	</div><!--- end of container -->
</section><!-- end of meet the team -->
<section id="hpSectionGroupContainer" class="relative">
	<div class="hpWhyWorkWithUs relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Work with us") ) : ?><?php endif ?>
	</div><!-- end of why work with us -->

	<div class="hpFeatureProperties relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Featured Properties") ) : ?><?php endif ?>
	</div>
</section><!-- end of section group -->

<section id="hpTestimonials" class="relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Testimonials") ) : ?><?php endif ?>
</section><!-- end of hp testimonials -->
<section id="hpFeaturedCommunities" class="relative">
	<div class="hpFeaturedCommunitiesContainer relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Featured Communities") ) : ?><?php endif ?>
	</div><!-- end of featured communities container -->
</section><!-- end of featured communities -->
<section id="inTheMedia" class="relative">
	<div class="inTheMediaContainer relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: In the Media") ) : ?><?php endif ?>
	</div><!-- end of in the media container -->
</section><!-- end of the in the media -->
<section id="hpInstagram" class="relative">
	<div class="hpInstagramContainer relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Instagram") ) : ?><?php endif ?>
	</div>
</section>
<?php get_footer(); ?>

<?php get_header(); ?>


<section class="globPopup fixed w-100 h-100">
	<div class="globPopupWrapper flex items-center justify-center w-100 h-100">
	<div class="globPopupContainer relative flex">
		<div class="globPopupClose absolute"><i class="ai-font-close-a"></i></div>
		<div class="popupContent">
			<div class="default-title">
				<h2>
					<em>Be In the know on <i>00</i></em>
					<span>Everything Lakeshore </span>
				</h2>
			</div>
			<p>This is the moment that you should enjoy the most; looking at the available properties in LakeShore; imagining yourself living the best home</p>
			<div class="popform">
				<?= do_shortcode('[contact-form-7 id="424" title="Popup Form" html_class="use-floating-validation-tip"]')?>
			</div>
		</div><!-- end of popup content -->
		<div class="popupImage relative">
			<canvas width="481" height="673" class="block w-100 h-100"></canvas>
			<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/popup-image.jpg" alt="Everything Lakeshore" width="481" height="673" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">  
		</div>
	</div>
</section>

<section id="hero" class="relative">
	<div class="slideshow relative">
		<?php echo do_shortcode('[aios_slider id="Homepage Slide"] '); ?>
	</div><!-- end of slideshow -->
</section><!-- end of hero -->

<section id="quickSearchWrapper" class="relative">
	<div class="quickSearchContainer flex w-100">

		<div class="quickSearchTitle">
			
			<div class="default-title">
				<h2>
					<em>Quick <i>01</i></em>
					<span>Search</span>
				</h2>
			</div>
		</div><!-- end of quick search title -->

		<div class="quickSearchFormWrap">
			<form action="#" method="get" class="qSForm">
				<div class="qSrow flex items-end">

					<div class="qScol">
						<label for="property-type">Property Type</label>
						<select name="property-type" id="property-type">
							<option value="Property Type">Property Type</option>
						</select>
					</div><!-- end of qScol -->
					<div class="qScol">
						<label for="selct-zip-code">Select Zip Code</label>
						<select name="selct-zip-code" id="selct-zip-code">
							<option value="Select Zip Code">Select Zip Code</option>
						</select>
					</div><!-- end of qScol -->
					<div class="qScol">
						<label for="bedrooms">Bedrooms</label>
						<select name="bedrooms" id="bedrooms">
							<option value="Bedrooms">Bedrooms</option>
						</select>
					</div><!-- end of qScol -->
					<div class="qScol">
						<label for="bathrooms">Bathrooms</label>
						<select name="bathrooms" id="bathrooms">
							<option value="Bathrooms">Bathrooms</option>
						</select>
					</div><!-- end of qScol -->
					<div class="qScol">
						<label for="min-price">Min. Price</label>
						<select name="min-price" id="min-price">
							<option value="Min. Price">Min. Price</option>
						</select>
					</div><!-- end of qScol -->
					<div class="qScol">
						<label for="max-price">Max Price</label>
						<select name="max-price" id="max-price">
							<option value="Max Price">Max Price</option>
						</select>
					</div><!-- end of qScol -->

					<div class="qsBttn flex">
						<input type="submit" value="Search">
						<a href="#">Advance</a>
					</div>

				</div>
			</form>
		</div><!-- end of quick search form Wrap -->

	</div>
</section><!-- end of quick search wrapper -->

<section id="aboutUsWrapper" class="relative">
	<div class="aboutUsContainer flex relative">
		<div class="aboutUsImage">
			<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/about-photo.jpg" alt="The Klingels" width="680" height="693" class="block w-100 h-auto">
		</div><!-- end of about us image -->
		<div class="aboutUsContent">
			<div class="default-title">
				<h2>
					<em>Meet <i>02</i></em>
					<span>The Klingels</span>
				</h2>
			</div>
			<p>After 18 years of representing home buyers and sellers, along the lakeshore, I have made it my goal to make every client’s transition seamless. My team and I are dedicated to truly understanding each client’s goals before starting the process.</p>
			<p>When working with sellers we customize a marketing plan to ensure 5-star results. Our partnership with Coldwell Banker provides our sellers with extensive local and global marketing opportunities for their property.</p>
			<p>Buyers have the unique opportunity to draw from my years of experience to accurately understand local neighborhoods. My candid advice and personal experience works to assist buyers to make a confident decision when choosing their home.</p>
			<p>I’d love to grab coffee and start the discussion! Reach out to schedule a time to talk about your future real estate goals!</p>
			<div class="default-button inline-block">
				<a href="#">Learn More</a>
			</div>
		</div><!-- end of about us content -->
	</div>
</section><!-- end of about us wrapper -->

<section id="meetTheTeam" class="relative">
	<div class="meetTheteamContainer relative">

		<div class="meetTheTeamContent flex items-center">
			<div class="meetTheTeamText">
				<div class="default-title">
					<h2>
						<em>Meet <i>03</i></em>
						<span>The Team</span>
					</h2>
				</div>
				<p>After 18 years of representing home buyers and sellers, along the lakeshore, I have made it my goal to make every client’s transition seamless. My team and I are dedicated to truly understanding each client’s goals before starting the process.</p>
				<p>When working with sellers we customize a marketing plan to ensure 5-star results. Our partnership with Coldwell Banker provides our sellers with extensive local and global marketing opportunities for their property.</p>
				<p>Buyers have the unique opportunity to draw from my years of experience to accurately understand local neighborhoods. My candid advice and personal experience works to assist buyers to make a confident decision when choosing their home.</p>
				<p>I’d love to grab coffee and start the discussion! Reach out to schedule a time to talk about your future real estate goals!</p>
			</div><!-- end of meet the team text -->
			<div class="meetTheTeamImage">

				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/meet-team-image.jpg" alt="Mee The Team" width="484" height="452" class="block w-100 h-auto">

			</div><!-- end of meet the team image -->
		</div><!-- !end of meet the team content -->

		<div class="hpAgents flex flex-wrap-wrap">

			<div class="hpAgent">
				<a href="#" class="block w-100 relative">
					<div class="hpAgentPhoto relative">
						<canvas width="354" height="279" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-1.jpg" alt="Brian Klingel" width="354" height="279" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div>
					<h3>Brian Klingel</h3>
					<span>CEO / Realtor</span>
				</a>
			</div><!-- end of hp agent -->
			<div class="hpAgent">
				<a href="#" class="block w-100 relative">
					<div class="hpAgentPhoto relative">
						<canvas width="354" height="279" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-2.jpg" alt="Jane Doe" width="354" height="279" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div>
					<h3>Jane Doe</h3>
					<span>Broker / Realtor</span>
				</a>
			</div><!-- end of hp agent -->
			<div class="hpAgent">
				<a href="#" class="block w-100 relative">
					<div class="hpAgentPhoto relative">
						<canvas width="354" height="279" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-3.jpg" alt="John Dela Cruz" width="354" height="279" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div>
					<h3>John Dela Cruz</h3>
					<span>Broker / Realtor</span>
				</a>
			</div><!-- end of hp agent -->
			<div class="hpAgent">
				<a href="#" class="block w-100 relative">
					<div class="hpAgentPhoto relative">
						<canvas width="354" height="279" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-4.jpg" alt="Steve Brook" width="354" height="279" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div>
					<h3>Steve Brook</h3>
					<span>Broker / Realtor</span>
				</a>
			</div><!-- end of hp agent -->
			<div class="hpAgent">
				<a href="#" class="block w-100 relative">
					<div class="hpAgentPhoto relative">
						<canvas width="354" height="279" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-5.jpg" alt="Peter McMillan" width="354" height="279" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div>
					<h3>Peter McMillan</h3>
					<span>Broker / Realtor</span>
				</a>
			</div><!-- end of hp agent -->
			<div class="hpAgent">
				<a href="#" class="block w-100 relative">
					<div class="hpAgentPhoto relative">
						<canvas width="354" height="279" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-6.jpg" alt="Stephen George" width="354" height="279" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div>
					<h3>Stephen George</h3>
					<span>Broker / Realtor</span>
				</a>
			</div><!-- end of hp agent -->

		</div><!-- end of hp agents -->

		<div class="default-button flex justify-center">
			<a href="#">Learn More</a>
		</div>

	</div><!--- end of container -->
</section><!-- end of meet the team -->
<section id="hpSectionGroupContainer" class="relative">
	
	<div class="hpWhyWorkWithUs relative">
		<div class="hpWhyWorkWithUsContainer">
			<div class="default-title text-center default-title-white">
				<h2>
					<em class="justify-center">Why <i>06</i></em>
					<span>Work With Us</span>
				</h2>
			</div>

			<ul class="work-with-us flex justify-center">
				<li>
					<span>$<em data-number="56">0</em> Million +</span>
					<i>Sold - 2021</i>
				</li>
				<li>
					<span>#<em data-number="6">0</em></span>
					<i>in Michigan</i>
				</li>
				<li>
					<span>#<em data-number="1">0</em></span>
					<i>Individual Agent Along <br> The Lakeshore</i>
				</li>
				<li>
					<span>Top <em data-number="1">0</em>%</span>
					<i>in Michigan</i>
				</li>
			</ul>
		</div>
	</div><!-- end of why work with us -->

	<div class="hpFeatureProperties relative">

		<div class="hpFPTitlewrap">
			<div class="hpFPTitleContainer flex justify-between items-center">
				<div class="default-title text-center">
					<h2>
						<em class="justify-center">Featured <i>04</i></em>
						<span>Properties</span>
					</h2>
				</div>
				<div class="default-button flex justify-center">
					<a href="#">View All Properties</a>
				</div>
			</div>	
		</div><!-- end of fp title -->

		<div class="fp-lists flex flex-wrap-wrap">

			<div class="fp-list">
				<a href="#" class="block relative">
					<div class="fpImage relative">
						<canvas width="530" height="384" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-1.jpg" alt="1700 East Walnut Avenue, Suite 400, El Segundo, CA 90245" width="530" height="384" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div><!-- end of fp image -->
					<div class="fpContent absolute bottom-0 left-0 w-100">
						<h4>$27,000.000</h4>
						<p>1700 East Walnut Avenue, Suite 400, El Segundo, CA 90245</p>
						<ul>
							<li>Beds: 5</li>
							<li>Baths: 4 1/2</li>
							<li>Sq.Ft: 2,399</li>
						</ul>
					</div><!-- end of fp content -->
				</a>
			</div><!-- end of fp list -->
			<div class="fp-list">
				<a href="#" class="block relative">
					<div class="fpImage relative">
						<canvas width="530" height="384" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-2.jpg" alt="1800 East Walnut Avenue, Suite 399, El Segundo, CA 90245" width="530" height="384" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div><!-- end of fp image -->
					<div class="fpContent absolute bottom-0 left-0 w-100">
						<h4>$18,000.000</h4>
						<p>1800 East Walnut Avenue, Suite 399, El Segundo, CA 90245</p>
						<ul>
							<li>Beds: 5</li>
							<li>Baths: 4 1/2</li>
							<li>Sq.Ft: 2,399</li>
						</ul>
					</div><!-- end of fp content -->
				</a>
			</div><!-- end of fp list -->
			<div class="fp-list">
				<a href="#" class="block relative">
					<div class="fpImage relative">
						<canvas width="530" height="384" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-3.jpg" alt="1600 West Walnut Avenue, Suite 401, El Segundo, CA 90245" width="530" height="384" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div><!-- end of fp image -->
					<div class="fpContent absolute bottom-0 left-0 w-100">
						<h4>$14,000.000</h4>
						<p>1600 West Walnut Avenue, Suite 401, El Segundo, CA 90245</p>
						<ul>
							<li>Beds: 5</li>
							<li>Baths: 4 1/2</li>
							<li>Sq.Ft: 2,399</li>
						</ul>
					</div><!-- end of fp content -->
				</a>
			</div><!-- end of fp list -->
			<div class="fp-list">
				<a href="#" class="block relative">
					<div class="fpImage relative">
						<canvas width="530" height="384" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-4.jpg" alt="1699 East Walnut Avenue, Suite 400, El Segundo, CA 90245" width="530" height="384" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div><!-- end of fp image -->
					<div class="fpContent absolute bottom-0 left-0 w-100">
						<h4>$9,000.000</h4>
						<p>1699 East Walnut Avenue, Suite 400, El Segundo, CA 90245</p>
						<ul>
							<li>Beds: 5</li>
							<li>Baths: 4 1/2</li>
							<li>Sq.Ft: 2,399</li>
						</ul>
					</div><!-- end of fp content -->
				</a>
			</div><!-- end of fp list -->
			<div class="fp-list">
				<a href="#" class="block relative">
					<div class="fpImage relative">
						<canvas width="530" height="384" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-5.jpg" alt="1310 North Walnut Avenue, Suite 400, El Segundo, CA 90245" width="530" height="384" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div><!-- end of fp image -->
					<div class="fpContent absolute bottom-0 left-0 w-100">
						<h4>$6,000.000</h4>
						<p>1310 North Walnut Avenue, Suite 400, El Segundo, CA 90245</p>
						<ul>
							<li>Beds: 5</li>
							<li>Baths: 4 1/2</li>
							<li>Sq.Ft: 2,399</li>
						</ul>
					</div><!-- end of fp content -->
				</a>
			</div><!-- end of fp list -->
			<div class="fp-list">
				<a href="#" class="block relative">
					<div class="fpImage relative">
						<canvas width="530" height="384" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-6.jpg" alt="Stephen George" width="530" height="384" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					</div><!-- end of fp image -->
					<div class="fpContent absolute bottom-0 left-0 w-100">
						<h4>$4,500.000</h4>
						<p>1401 South Walnut Avenue, Suite 400, El Segundo, CA 90245</p>
						<ul>
							<li>Beds: 5</li>
							<li>Baths: 4 1/2</li>
							<li>Sq.Ft: 2,399</li>
						</ul>
					</div><!-- end of fp content -->
				</a>
			</div><!-- end of fp list -->

		</div><!-- end of fp lists -->

	</div>
</section><!-- end of section group -->

<section id="hpTestimonials" class="relative">

	<div class="hpTestimonials-container relative">
		<div class="default-title text-center">
			<h2>
				<em class="justify-center">featured <i>08</i></em>
				<span>Testimonials</span>
			</h2>
		</div>
		<div class="splide testi-lists">
			<div class="splide__track">
				<div class="splide__list">

					<div class="splide__slide testi-list">
						<p>My wife and I were first time home buyers and Brian and his team made everything easy and stress free. Brian’s team was very flexible with our times to look at houses. I will definitely use Brian again if i decide to move i...</p>
						<h4>- Dave</h4>
					</div><!-- end of testi list -->

					<div class="splide__slide testi-list">
						<p>My wife and I were first time home buyers and Brian and his team made everything easy and stress free. Brian’s team was very flexible with our times to look at houses. I will definitely use Brian again if i decide to move i...</p>
						<h4>- Dave</h4>
					</div><!-- end of testi list -->

					<div class="splide__slide testi-list">
						<p>My wife and I were first time home buyers and Brian and his team made everything easy and stress free. Brian’s team was very flexible with our times to look at houses. I will definitely use Brian again if i decide to move i...</p>
						<h4>- Dave</h4>
					</div><!-- end of testi list -->

				</div>
			</div>
		</div><!-- end of testi lists -->

		<div class="default-button flex justify-center">
			<a href="#">Read More</a>
		</div>
	</div><!-- end of testimonials -->
</section><!-- end of hp testimonials -->
<section id="hpFeaturedCommunities" class="relative">
	<div class="hpFeaturedCommunitiesContainer relative">
		<div class="default-title text-center">
			<h2>
				<em class="justify-center">featured <i>05</i></em>
				<span>Communities</span>
			</h2>
		</div>

		<div class="hpFcLists flex flex-wrap-wrap">

			<div class="hpFcList">
				<a href="#" class="block w-100 relative">
					<canvas width="470" height="304" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-1.jpg" alt="Grand Haven" width="470" height="304" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					<h4>Grand Haven</h4>
				</a>
			</div><!-- end of fc list -->

			<div class="hpFcList">
				<a href="#" class="block w-100 relative">
					<canvas width="470" height="304" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-2.jpg" alt="Spring Lake" width="470" height="304" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					<h4>Spring Lake</h4>
				</a>
			</div><!-- end of fc list -->

			<div class="hpFcList">
				<a href="#" class="block w-100 relative">
					<canvas width="470" height="304" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-3.jpg" alt="Muskegon" width="470" height="304" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					<h4>Muskegon</h4>
				</a>
			</div><!-- end of fc list -->

			<div class="hpFcList">
				<a href="#" class="block w-100 relative">
					<canvas width="470" height="304" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-4.jpg" alt="West Olive" width="470" height="304" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					<h4>West Olive</h4>
				</a>
			</div><!-- end of fc list -->

			<div class="hpFcList">
				<a href="#" class="block w-100 relative">
					<canvas width="470" height="304" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-5.jpg" alt="Holland" width="470" height="304" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					<h4>Holland</h4>
				</a>
			</div><!-- end of fc list -->

			<div class="hpFcList">
				<a href="#" class="block w-100 relative">
					<canvas width="470" height="304" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-6.jpg" alt="White Hall" width="470" height="304" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
					<h4>White Hall</h4>
				</a>
			</div><!-- end of fc list -->

		</div><!-- end of fc lists -->

		<div class="default-button flex justify-center">
			<a href="#">View All Communities</a>
		</div>
	</div><!-- end of featured communities container -->
</section><!-- end of featured communities -->
<section id="inTheMedia" class="relative">
	<div class="inTheMediaContainer relative">

		<div class="featuredInTheMedia flex items-center">
			<div class="inTheMediaText">
				<div class="default-title">
					<h2>
						<em>In <i>07</i></em>
						<span>The Media</span>
					</h2>
				</div>
				<p>one-stop shop for real estate in sample city. This is the moment that you should enjoy the most; looking at the available properties in sample city.</p>

				<div class="default-button inline-block">
					<a href="#">View All Videos</a>
				</div>

			</div><!-- end of in the media text -->
			<div class="inTheMediaFeaturedVideo">
				<a href="https://player.vimeo.com/video/215609798" class="block w-100 relative aios-video-popup">
					<canvas width="824" height="463" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/featured-video.jpg" alt="Featured Video" width="824" height="463"  class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
				</a>
			</div><!-- end of featured video -->
		</div>

		<div class="video-lists flex">
			<div class="video-list">
				<a href="https://player.vimeo.com/video/215609798" class="block w-100 relative aios-video-popup">
					<canvas width="410" height="232" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/video1.jpg" alt="Featured Video" width="410" height="232" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
				</a>
			</div><!-- end of video list -->
			<div class="video-list">
				<a href="https://player.vimeo.com/video/215609798" class="block w-100 relative aios-video-popup">
					<canvas width="410" height="232" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/video2.jpg" alt="Featured Video" width="410" height="232" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
				</a>
			</div><!-- end of video list -->
			<div class="video-list">
				<a href="https://player.vimeo.com/video/215609798" class="block w-100 relative aios-video-popup">
					<canvas width="410" height="232" class="block w-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/video3.jpg" alt="Featured Video" width="410" height="232" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
				</a>
			</div><!-- end of video list -->
		</div><!-- end of video lists -->

	</div><!-- end of in the media container -->
</section><!-- end of the in the media -->
<section id="hpInstagram" class="relative">
	<div class="hpInstagramContainer relative">

		<div class="default-title text-center">
			<h2>
				<em class="justify-center">Follow us on <i>09</i></em>
				<span>Instagram</span>
			</h2>
		</div>

		<div class="splide igLists">
			<div class="splide__track">
				<div class="splide__list">

					<div class="splide__slide igList">
						<a href="#" class="block w-100 relative">
							<canvas width="234" height="234" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig1.jpg" alt="Featured Video" width="234" height="234" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
							<i class="ai-font-instagram"></i>
						</a>
					</div><!-- end of testi list -->
					<div class="splide__slide igList">
						<a href="#" class="block w-100 relative">
							<canvas width="234" height="234" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig2.jpg" alt="Featured Video" width="234" height="234" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
							<i class="ai-font-instagram"></i>
						</a>
					</div><!-- end of testi list -->
					<div class="splide__slide igList">
						<a href="#" class="block w-100 relative">
							<canvas width="234" height="234" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig3.jpg" alt="Featured Video" width="234" height="234" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
							<i class="ai-font-instagram"></i>
						</a>
					</div><!-- end of testi list -->
					<div class="splide__slide igList">
						<a href="#" class="block w-100 relative">
							<canvas width="234" height="234" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig4.jpg" alt="Featured Video" width="234" height="234" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
							<i class="ai-font-instagram"></i>
						</a>
					</div><!-- end of testi list -->
					<div class="splide__slide igList">
						<a href="#" class="block w-100 relative">
							<canvas width="234" height="234" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig5.jpg" alt="Featured Video" width="234" height="234" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
							<i class="ai-font-instagram"></i>
						</a>
					</div><!-- end of testi list -->
					<div class="splide__slide igList">
						<a href="#" class="block w-100 relative">
							<canvas width="234" height="234" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig6.jpg" alt="Featured Video" width="234" height="234" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
							<i class="ai-font-instagram"></i>
						</a>
					</div><!-- end of testi list -->
					<div class="splide__slide igList">
						<a href="#" class="block w-100 relative">
							<canvas width="234" height="234" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig3.jpg" alt="Featured Video" width="234" height="234" class="block w-100 h-100 object-fit-cover object-position-center absolute top-0 left-0">
							<i class="ai-font-instagram"></i>
						</a>
					</div><!-- end of testi list -->

				

				</div>
			</div>
		</div><!-- end of igLists -->


		<div class="ig-pagination flex justify-center items-center">
			<div class="ig-arrow ig-prev"></div>
			<div class="default-button flex justify-center">
				<a href="#">View More</a>
			</div>
			<div class="ig-arrow ig-next"></div>
		</div>

	</div>
</section>
<?php get_footer(); ?>

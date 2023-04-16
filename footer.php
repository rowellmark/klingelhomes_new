			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>


	<section id="joinOurNetwork" class="relative">
		<div class="joinOurNetworkContainer">

			<div class="default-title text-center default-title-white" data-aos="fade-up" data-aos-once="true" data-aos-offset="200" data-aos-duration="800">
					<h2>
					<em class="justify-center">join our <i>10</i></em>
					<span>Network</span>
				</h2>
			</div>
			<p data-aos="fade-up" data-aos-once="true" data-aos-offset="200" data-aos-duration="800">Become an insider on everything real estate along the lakeshore.</p>
			<div class="networkForm" data-aos="fade-up" data-aos-once="true" data-aos-offset="200" data-aos-duration="800">
				<?= do_shortcode('[contact-form-7 id="339" title="HP Contact Us" html_class="use-floating-validation-tip"]')?>
			</div>
		</div>
	</section>


	<footer class="footer">
		<div class="footerContainer">

			<div class="footer-logos flex justify-center items-center">
				
				<a href="#" class="block">
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo-white.png" alt="Homes Real Estate Agency" class="block img-responsive h-auto" width="301" height="113">
				</a>
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/brokerage-logo.png" alt="Coldwell" class="block img-responsive h-auto" width="194" height="116">

			</div><!-- end of footer logos -->

			<div class="footer-info">
				<ul class="flex justify-between w-100 items-center">
					<li>
						<h3>Phone</h3>
						<?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?>
					</li>
					<li>
						<h3>Email</h3>
						<?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?>
					</li>
					<li>
						<h3>Office Address</h3>
						<?= do_shortcode('[ai_client_address]')?>
					</li>
					<li>
						<h3>Social Media</h3>
						<div class="glob-smi flex items-center justify-between">
							<a href="<?= do_shortcode('[ai_client_facebook]')?>" target="_blank"><i class="ai-font-facebook"></i> Facebook</a>
							<a href="<?= do_shortcode('[ai_client_youtube]')?>" target="_blank"><i class="ai-font-youtube"></i> Youtube</a>
							<a href="<?= do_shortcode('[ai_client_instagram]')?>" target="_blank"><i class="ai-font-instagram"></i> instagram</a>
						</div>
					</li>
				</ul>
			</div><!-- end of footer info -->

			<div class="footer-navigation">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav flex justify-center', 'theme_location' => 'primary-menu','depth'=>1) ); ?>
			</div>

			<div class="footer-disclaimer">
				<p>Klingel Homes Real Estate - Upgraded committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website, or notice any accessibility problems, please contact us at <?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?> to specify the nature of the accessibility issue and any assistive technology you use. We strive to provide the content you need in the format you require.</p>
			</div>
			<div class="footer-copyright flex justify-between items-center">
				<p>Copyright&copy; <?php echo date('Y') ?>.  <span>Klingel Homes Real Estate</span> - Upgraded. All rights reserved. <?= do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]')?></p>

				
				<div class="copyright-logos flex items-center justify-center">
					<i class="ai-font-eho"></i>
					<i class="ai-font-realtor-mls"></i>
					
				</div>

			</div>
		</div>		
	</footer>
	
	<?php do_action('aios_neighborhoods_footer')?>
	<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>

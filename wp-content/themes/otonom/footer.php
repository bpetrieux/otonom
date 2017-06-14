
<div class="modal_bg hidden">
	<div class="modal_wrap">
	<span class="modal_close"><i class="fa fa-times" aria-hidden="true"></i></span>
	<div class="videoWrapper">
		<span id="ytplayer"></span>
		</div>
	</div>
</div>
    <footer class="footer">
    <div class="container">
		<div class="footer_title">INTÉRESSÉ?</div>
		<p class="footer_txt">Laissez-nous vous démontrer comment Otonom Solution vous fera sauver du temps!*</p>
		<h6 class="footer_small">*Demande de soumission "sans engagement"</h6>
			<div class="form">
				<?php echo do_shortcode( '[contact-form-7 id="4" title="contact"]') ?>
			</div>
			<section class="footer_social">
			<a href="<?php the_field('facebook_link','option'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="<?php the_field('twitter_link','option'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="<?php the_field('linkedin_link','option'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			<a href="mailto:<?php the_field('email_adress','option'); ?>" ><i class="fa fa-envelope" aria-hidden="true"></i></a>
				
			</section>

			<div class="footer_partners">
				<div class="footer_partners_title"><h4>Fiers partenaires</h4></div>
				<div class="footer_partners_img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_CM.png" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_RGCD.png" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo_Proprio-Expert.png" alt="">
				</div>
			</div>
			</div>
			</footer>

<?php wp_footer(); ?>

</body>
</html>


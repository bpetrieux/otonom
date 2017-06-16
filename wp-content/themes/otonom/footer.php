
<div class="modal_bg hidden">
	<div class="modal_wrap">
	<span class="modal_close"><i class="fa fa-times" aria-hidden="true"></i></span>
	<div class="videoWrapper">
		<span id="ytplayer"></span>
		</div>
	</div>
</div>
    <footer class="footer">
    <div class="pre_container">
    <div class="container">
		<div id="formulaire" class="footer_title">INTÉRESSÉ?</div>
		<p class="footer_txt">Laissez-nous vous démontrer comment Otonom Solution vous fera sauver du temps!*</p>
		<h6 class="footer_small">*Demande de soumission "sans engagement"</h6>
			<section class="form">
				<?php echo do_shortcode( '[contact-form-7 id="4" title="contact"]') ?>
			</section>
			<section class="footer_social">
			<a href="<?php the_field('facebook_link','option'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="<?php the_field('twitter_link','option'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="<?php the_field('linkedin_link','option'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			<a href="mailto:<?php the_field('email_adress','option'); ?>" ><i class="fa fa-envelope" aria-hidden="true"></i></a>
				
			</section>

			<section class="footer_partners">
				<div class="footer_partners_title"><h4>Fiers partenaires</h4></div>
				<div class="footer_partners_img">
					<a href="#" target="_blank"><img class="cd" src="<?php echo get_template_directory_uri(); ?>/img/condo_manager.png" alt=""></a>
					<a href="#" target="_blank"><img class="rgcq" src="<?php echo get_template_directory_uri(); ?>/img/rgcd.png" alt=""></a>
					<a href="#" target="_blank"><img class="pe" src="<?php echo get_template_directory_uri(); ?>/img/cm.png" alt=""></a>
				</div>
			</div>
			</div>
			</section>
			</footer>

<?php wp_footer(); ?>

</body>
</html>


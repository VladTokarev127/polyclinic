<?php
	$tel = get_field('tel', 'options');
	$result = preg_replace('/(?:\G|^)[+\d]*\K[^:+\d]/m', '', $tel);
	$wa = get_field('wa', 'options');
	$waresult = preg_replace('/(?:\G|^)[+\d]*\K[^:+\d]/m', '', $wa);
?>

	</main>

	<footer class="footer">

		<div class="footer__top">
			<div class="container">

				<a href="<?php echo pll_home_url(pll_current_language()); ?>" class="footer__logo">
					<div class="footer__logo-img"><img src="<?php echo esc_url(get_field('logo', 'options')['url']); ?>" alt="<?php echo get_field('logo', 'options')['alt']; ?>"></div>
					<div class="footer__logo-content">
						<div class="footer__logo-title"><?php pll_e('Заголовок логотипа'); ?></div>
						<div class="footer__logo-text"><?php pll_e('Текст логотипа'); ?></div>
					</div>
				</a>

				<div class="footer__address">Адрес: <br><?php pll_e('Адрес'); ?></div>

				<div class="footer__mail">
					<div class="footer__label">E-MAIL:</div>
					<a href="mailto:<?php the_field('mail', 'options'); ?>" class="footer__mail-link"><?php the_field('mail', 'options'); ?></a>
				</div>
				
				<div class="footer__info">
					<div class="footer__label">Телефон:</div>
					<div class="footer__info-row footer__tel"><?php pll_e('Регистратура'); ?>: <a href="tel:<?php echo $result; ?>"><?php echo $tel; ?></a></div>
					<div class="footer__info-row footer__wsp"><?php pll_e('WhatsApp'); ?>: <a href="https://wa.me/<?php echo $waresult; ?>"><?php echo $wa; ?></a></div>
				</div>

			</div>
		</div>
		<div class="footer__bottom">
			<div class="container">

				<div class="footer__copyright"><?php pll_e('Копирайт'); ?></div>
				<div class="footer__dev"><?php pll_e('Разработчики'); ?></div>

			</div>
		</div>

	</footer>

	</div>

	<?php wp_footer(); ?>

</body>
</html>
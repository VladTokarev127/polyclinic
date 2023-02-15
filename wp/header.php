<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php echo wp_get_document_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="<?php the_field('favicon', 'options'); ?>" type="image/x-icon">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="x-rim-auto-match" content="none">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
	<?php wp_head(); ?>
</head>

<?php
	$tel = get_field('tel', 'options');
	$result = preg_replace('/(?:\G|^)[+\d]*\K[^:+\d]/m', '', $tel);
	$wa = get_field('wa', 'options');
	$waresult = preg_replace('/(?:\G|^)[+\d]*\K[^:+\d]/m', '', $wa);
?>

<body <?php body_class(); ?>>

	<div class="wrapper">

		<header class="header">

			<div class="header__mobile">
				<div class="container">

					<div class="header__main">
						<div class="header__mail"><a href="mailto:<?php the_field('mail', 'options'); ?>"><?php the_field('mail', 'options'); ?></a></div>
						<div class="header__vers"><a href="<?php the_field('vers', 'options'); ?>"><?php pll_e('Версия для слабовидящих'); ?></a></div>
						<form action="/" class="header__search">
							<input type="text" name="s" placeholder="<?php pll_e('Поиск...'); ?>" class="header__search-input" required>
							<button type="submit" class="header__search-btn"><img src="/wp-content/themes/polyclinic/img/loop.svg" alt=""></button>
						</form>
						<div class="header__langs">
							<?php
								$list = pll_the_languages( array( 'raw' => 1, 'hide_if_empty' => 0 ) );
								$count = count($list) - 1;
								$index = 0;
							?>
							<?php foreach($list as $key=>$item): ?>
								<a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><?php if($count != $index): ?> / <?php endif; ?>
								<?php $index++; ?>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="header__nav">
						<nav>
							<?php 
								wp_nav_menu([
									'menu'            => 'header_menu',
									'container'       => false,
								]);
							?>
						</nav>
					</div>
					<div class="header__info">
						<div class="header__info-row header__tel"><?php pll_e('Регистратура'); ?> <a href="tel:<?php echo $result; ?>"><?php echo $tel; ?></a></div>
						<div class="header__info-row header__wsp"><?php pll_e('WhatsApp'); ?>: <a href="https://wa.me/<?php echo $waresult; ?>"><?php echo $wa; ?></a></div>
						<div class="header__address"><?php pll_e('Адрес'); ?></div>
					</div>

				</div>
			</div>

			<div class="header__top">
				<div class="container">
					<a href="<?php echo pll_home_url(pll_current_language()); ?>" class="header__logo">
						<div class="header__logo-img"><img src="<?php echo esc_url(get_field('logo', 'options')['url']); ?>" alt="<?php echo get_field('logo', 'options')['alt']; ?>"></div>
						<div class="header__logo-content">
							<div class="header__logo-title"><?php pll_e('Заголовок логотипа'); ?></div>
							<div class="header__logo-text"><?php pll_e('Текст логотипа'); ?></div>
						</div>
					</a>
					<button class="header__btn"><span></span></button>
					<div class="header__main">
						<div class="header__mail"><a href="mailto:<?php the_field('mail', 'options'); ?>"><?php the_field('mail', 'options'); ?></a></div>
						<div class="header__vers"><a href="<?php the_field('vers', 'options'); ?>"><?php pll_e('Версия для слабовидящих'); ?></a></div>
						<form action="/" class="header__search">
							<input type="text" name="s" placeholder="<?php pll_e('Поиск...'); ?>" class="header__search-input" required>
							<button type="submit" class="header__search-btn"><img src="/wp-content/themes/polyclinic/img/loop.svg" alt=""></button>
						</form>
						<div class="header__langs">
							<?php
								$list = pll_the_languages( array( 'raw' => 1, 'hide_if_empty' => 0 ) );
								$count = count($list) - 1;
								$index = 0;
							?>
							<?php foreach($list as $key=>$item): ?>
								<a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a><?php if($count != $index): ?> / <?php endif; ?>
								<?php $index++; ?>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="header__info">
						<div class="header__info-row header__tel"><?php pll_e('Регистратура'); ?>: <a href="tel:<?php echo $result; ?>"><?php echo $tel; ?></a></div>
						<div class="header__info-row header__wsp"><?php pll_e('WhatsApp'); ?>: <a href="https://wa.me/<?php echo $waresult; ?>"><?php echo $wa; ?></a></div>
						<div class="header__address"><?php pll_e('Адрес'); ?></div>
					</div>
				</div>
			</div>

			<div class="header__bottom">
				<div class="container">

					<div class="header__nav">
						<nav>
							<?php 
								wp_nav_menu([
									'menu'            => 'header_menu',
									'container'       => false,
								]);
							?>
						</nav>
					</div>

				</div>
			</div>

		</header>

		<main class="main">
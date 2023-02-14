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

<body <?php body_class(); ?>>

	<div class="wrapper">

		<header class="header">

			<div class="header__mobile">
				<div class="container">

					<div class="header__main">
						<div class="header__mail"><a href="mailto:gorp3@mail.ru">gorp3@mail.ru</a></div>
						<div class="header__vers"><a href="#">Версия для слабовидящих</a></div>
						<form action="/" class="header__search">
							<input type="text" name="s" placeholder="Поиск..." class="header__search-input" required>
							<button type="submit" class="header__search-btn"><img src="img/loop.svg" alt=""></button>
						</form>
						<div class="header__langs">
							<a href="#">Рус</a> / <a href="#">Қаз</a>
						</div>
					</div>
					<div class="header__nav">
						<nav>
							<ul>
								<li><a href="#">Главная</a></li>
								<li class="menu-item-has-children">
									<a href="#">О поликлинике</a>
									<ul>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Пациенту</a>
									<ul>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
									</ul>
								</li>
								<li><a href="#">Новости</a></li>
								<li><a href="#">Комплаенс-служба</a></li>
								<li class="menu-item-has-children">
									<a href="#">Гос. закупки</a>
									<ul>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Услуги</a>
									<ul>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Гос. символы</a>
									<ul>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
									</ul>
								</li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</nav>
					</div>
					<div class="header__info">
						<div class="header__info-row header__tel">Регистратура: <a href="tel:87273331477">8 (727) 333-14-77</a></div>
						<div class="header__info-row header__wsp">WhatsApp: <a href="https://wa.me/87273331477">8 (727) 333-14-77</a></div>
						<div class="header__address">ул. Розыбакиева 74, ориентир угол улицы Жамбыла</div>
					</div>

				</div>
			</div>

			<div class="header__top">
				<div class="container">
					<a href="/" class="header__logo">
						<div class="header__logo-img"><img src="img/logo.png" alt=""></div>
						<div class="header__logo-content">
							<div class="header__logo-title">Городская поликлиника №3</div>
							<div class="header__logo-text">Управление общественного <br>здоровья <b>г. Алматы</b></div>
						</div>
					</a>
					<button class="header__btn"><span></span></button>
					<div class="header__main">
						<div class="header__mail"><a href="mailto:gorp3@mail.ru">gorp3@mail.ru</a></div>
						<div class="header__vers"><a href="#">Версия для слабовидящих</a></div>
						<form action="/" class="header__search">
							<input type="text" name="s" placeholder="Поиск..." class="header__search-input" required>
							<button type="submit" class="header__search-btn"><img src="img/loop.svg" alt=""></button>
						</form>
						<div class="header__langs">
							<a href="#">Рус</a> / <a href="#">Қаз</a>
						</div>
					</div>
					<div class="header__info">
						<div class="header__info-row header__tel">Регистратура: <a href="tel:87273331477">8 (727) 333-14-77</a></div>
						<div class="header__info-row header__wsp">WhatsApp: <a href="https://wa.me/87273331477">8 (727) 333-14-77</a></div>
						<div class="header__address">ул. Розыбакиева 74, ориентир угол улицы Жамбыла</div>
					</div>
				</div>
			</div>

			<div class="header__bottom">
				<div class="container">

					<div class="header__nav">
						<nav>
							<ul>
								<li><a href="#">Главная</a></li>
								<li class="menu-item-has-children">
									<a href="#">О поликлинике</a>
									<ul>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Пациенту</a>
									<ul>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
									</ul>
								</li>
								<li><a href="#">Новости</a></li>
								<li><a href="#">Комплаенс-служба</a></li>
								<li class="menu-item-has-children">
									<a href="#">Гос. закупки</a>
									<ul>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Услуги</a>
									<ul>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="#">Гос. символы</a>
									<ul>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
										<li><a href="#">lorem1</a></li>
									</ul>
								</li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</nav>
					</div>

				</div>
			</div>

		</header>

		<main class="main">
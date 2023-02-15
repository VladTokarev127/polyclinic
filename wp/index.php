<?php get_header(); ?>

	<!-- start section hero -->
	<section class="hero">
		<div class="container">

			<div class="hero__grid">
				<div class="hero__content">
					<div class="hero__img"><img src="<?php echo esc_url(get_field('hero_img')['url']); ?>" alt="<?php echo get_field('hero_img')['alt']; ?>"></div>
					<a href="<?php the_field('hero_link'); ?>" class="hero__link"><?php the_field('hero_link_text'); ?></a>
				</div>
				<div class="hero__swiper-container">
					<div class="hero__swiper swiper">
						<div class="hero__swiper-wrapper swiper-wrapper">
							<?php while( the_repeater_field('hero_list') ): ?>
								<div class="hero__swiper-slide swiper-slide">
									<div class="hero__bg"><img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt'] ?>"></div>
									<a href="<?php the_sub_field('link'); ?>" class="hero__btn"><?php the_sub_field('link_text'); ?></a>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
			<div class="hero__bottom">
				<div class="hero__bottom-swiper swiper">
					<div class="hero__bottom-wrapper swiper-wrapper">
						<?php while( the_repeater_field('services') ): ?>
							<div class="hero__bottom-slide swiper-slide">
								<a href="<?php the_sub_field('link'); ?>" class="hero__bottom-link">
									<div class="hero__bottom-icon"><img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt'] ?>"></div>
									<div class="hero__bottom-text"><?php the_sub_field('text'); ?></div>
								</a>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="swiper-button-prev"><img src="/wp-content/themes/polyclinic/img/arrow-left.svg" alt=""></div>
					<div class="swiper-button-next"><img src="/wp-content/themes/polyclinic/img/arrow-right.svg" alt=""></div>
				</div>
			</div>

		</div>
	</section>
	<!-- end section hero -->

	<!-- start section news -->
	<section class="news">
		<div class="container">

			<div class="title__wrapper">
				<h2 class="title news__title"><?php the_field('title_1'); ?></h2>
			</div>

			<div class="news__top">
				<div class="news__left">
					<?php while( the_repeater_field('list_1') ): ?>
						<a href="<?php the_sub_field('link'); ?>" class="news__btn <?php echo get_row_index() === 1 ? 'is-active' : ''; ?>"><?php the_sub_field('link_text'); ?></a>
					<?php endwhile; ?>
				</div>
				<div class="news__right">
					<?php while( the_repeater_field('list_2') ): ?>
						<a href="<?php the_sub_field('link'); ?>" class="news__btn"><?php the_sub_field('link_text'); ?></a>
					<?php endwhile; ?>
				</div>
			</div>

			<div class="news__grid">
			<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'order' => 'ASC',
					'posts_per_page' => '4',
				);
				$blog = new WP_Query( $args );
				?>
				<?php if($blog->have_posts()):
				while($blog->have_posts()): $blog->the_post(); ?>
					<div class="news__item">
						<div class="news__img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
						<div class="news__content">
							<h4 class="news__title"><?php the_title(); ?></h4>
							<div class="news__text"><?php echo mb_strimwidth(get_the_content(), 0, 120, '...'); ?></div>
							<div class="news__bottom">
								<div class="news__date"><?php echo get_the_date('d.m.Y'); ?></div>
								<div class="news__more"><a href="<?php the_permalink(); ?>"><?php pll_e('Подробнее'); ?></a></div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php else: ?>
					Записей нет!
				<?php endif; wp_reset_query(); ?>
			</div>

			<div class="news__links">
				<?php while( the_repeater_field('list_3') ): ?>
					<a href="<?php the_sub_field('link'); ?>" class="news__link">
						<div class="news__link-icon"><img src="<?php echo esc_url(get_sub_field('img')['url']); ?>" alt="<?php echo get_sub_field('img')['alt'] ?>"></div>
						<div class="news__link-text"><?php the_sub_field('link_text'); ?></div>
					</a>
				<?php endwhile; ?>
			</div>

		</div>
	</section>
	<!-- end section news -->

	<!-- start section photo -->
	<section class="photo">
		<div class="container">

			<div class="title__wrapper">
				<h2 class="title photo__title"><?php the_field('title_2'); ?></h2>
			</div>

			<div class="photo__swiper-container">
				<div class="photo__swiper swiper">
					<div class="photo__swiper-wrapper swiper-wrapper">
						<?php
							$images = get_field('gallery');
						?>
						<?php foreach( $images as $image ): ?>
							<div class="photo__swiper-slide swiper-slide">
								<a href="<?php echo esc_url($image['url']); ?>" class="photo__img"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>"></a>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-button-prev"><img src="/wp-content/themes/polyclinic/img/arrow-left.svg" alt=""></div>
					<div class="swiper-button-next"><img src="/wp-content/themes/polyclinic/img/arrow-right.svg" alt=""></div>
				</div>
			</div>

		</div>
	</section>
	<!-- end section photo -->

	<div class="map" id="map"><?php the_field('map', 'options'); ?></div>

<?php get_footer(); ?>
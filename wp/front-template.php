<?php // Template Name: Front page ?>

<?php get_header('custom'); ?>

<div class="c-wrapper">
  <main>

    <?php $hero_video = get_field('hero_video'); ?>
    <?php $hero_title = get_field('hero_title'); ?>
    <?php $hero_subtitle = get_field('hero_subtitle'); ?>
    <?php $hero_button = get_field('hero_button'); ?>

    <section class="c-hero">
      <video src="<?php echo $hero_video; ?>" class="c-hero__video" autoplay muted loop playsinline></video>
      <div class="c-hero__container c-container">
        <div class="c-hero__content">
          <?php if ($hero_title): ?>
            <h1 class="c-hero__title"><?php echo $hero_title; ?></h1>
          <?php endif; ?>
          <?php if ($hero_subtitle): ?>
            <p class="c-hero__subtitle"><?php echo $hero_subtitle; ?></p>
          <?php endif; ?>
          <?php if ($hero_button): ?>
            <div class="c-hero__actions">
              <a href="<?php echo $hero_button['url']; ?>" target="<?php echo $hero_button['target'] ?: '_self'; ?>"
                class="c-hero__button c-button c-button--primary"><?php echo $hero_button['title']; ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <a href="#about" aria-label="scroll down" title="scroll down" class="c-hero__scroll-down">
        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
          <path
            d="M3.48778 5.58594C3.25912 5.3125 2.80181 5.3125 2.53504 5.58594C2.26827 5.85937 2.26827 6.28906 2.53504 6.5625L10.2713 14.4141C10.5381 14.6484 10.9573 14.6484 11.2241 14.4141L18.9222 6.5625C19.189 6.28906 19.189 5.85938 18.9222 5.58594C18.6555 5.3125 18.2363 5.3125 17.9695 5.58594L10.7286 12.7344L3.48778 5.58594Z"
            fill="currentColor" />
        </svg>
      </a>
    </section>

    <?php $two_columns_title = get_field('two_columns_title'); ?>
    <?php $two_columns_columns = get_field('two_columns_columns'); ?>
    <?php $two_columns_button = get_field('two_columns_button'); ?>
    <?php $two_columns_bg_text = get_field('two_columns_bg_text'); ?>

    <section class="c-two-columns c-section" id="about">
      <?php if ($two_columns_bg_text): ?>
        <?php echo wp_get_attachment_image($two_columns_bg_text, 'full', false, ['loading' => 'lazy', 'class' => 'c-two-columns__subtitle']); ?>
      <?php endif; ?>
      <div class="c-two-columns__container c-container">
        <div class="c-two-columns__content">
          <?php if ($two_columns_title): ?>
            <h2 class="c-two-columns__title c-heading-large"><?php echo $two_columns_title; ?></h2>
          <?php endif; ?>
          <?php if ($two_columns_columns): ?>
            <div class="c-two-columns__columns">
              <?php foreach ($two_columns_columns as $column): ?>
                <div class="c-two-columns__column c-base-text">
                  <p><?php echo $column['text']; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if ($two_columns_button): ?>
            <a href="<?php echo $two_columns_button['url']; ?>"
              target="<?php echo $two_columns_button['target'] ?: '_self'; ?>"
              class="c-two-columns__button c-button c-button--secondary"><?php echo $two_columns_button['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </section>


    <?php $video_title = get_field('video_title'); ?>
    <?php $video_text = get_field('video_text'); ?>
    <?php $video_button = get_field('video_button'); ?>
    <?php $video_image = get_field('video_placeholder'); ?>
    <?php $video_url = get_field('video_url'); ?>
    <?php $video_play_button = get_field('video_play_button'); ?>
    <section class="c-video c-section c-section--gray">
      <div class="c-video__container c-container c-base-row">
        <div class="c-video__content c-base-row__item-content">
          <?php if ($video_title): ?>
            <h2 class="c-video__title c-heading-large">
              <?php echo $video_title; ?>
            </h2>
          <?php endif; ?>
          <?php if ($video_text): ?>
            <p class="c-video__text c-base-text">
              <?php echo $video_text; ?>
            </p>
          <?php endif; ?>
          <?php if ($video_button): ?>
            <a href="<?php echo $video_button['url']; ?>" target="<?php echo $video_button['target'] ?: '_self'; ?>"
              class="c-video__button c-button c-button--secondary"><?php echo $video_button['title']; ?></a>
          <?php endif; ?>
        </div>
        <div class="c-video__video c-base-row__item-media">
          <?php echo wp_get_attachment_image($video_image, 'full', false, ['loading' => 'lazy', 'class' => 'c-video__image']); ?>
          <a href="<?php echo $video_url; ?>" class="c-video__play-button video-lightbox">
            <?php echo wp_get_attachment_image($video_play_button, 'full', false, ['loading' => 'lazy', 'class' => 'c-video__play-icon']); ?>
          </a>
        </div>
      </div>
    </section>

    <?php $book_title = get_field('book_title'); ?>
    <?php $book_button = get_field('book_button'); ?>
    <?php $book_image = get_field('book_image'); ?>
    <?php $book_list = get_field('book_list'); ?>
    <?php $bottom_text = get_field('bottom_text'); ?>
    <section class="c-book c-section">
      <div class="c-book__container c-container c-base-row">
        <?php if ($book_image): ?>
          <div class="c-book__image c-base-row__item-media">
            <?php echo wp_get_attachment_image($book_image, 'full', false, ['loading' => 'lazy', 'class' => 'c-book__image-img']); ?>
          </div>
        <?php endif; ?>
        <div class="c-book__content c-base-row__item-content c-base-text">
          <?php if ($book_title): ?>
            <h2 class="c-book__title c-heading-large">
              <?php echo $book_title; ?>
            </h2>
          <?php endif; ?>
          <?php if ($book_list): ?>
            <ul>
              <?php foreach ($book_list as $item): ?>
                <li><?php echo $item['text']; ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <?php if ($bottom_text): ?>
            <p><strong><?php echo $bottom_text; ?></strong></p>
          <?php endif; ?>
          <?php if ($book_button): ?>
            <a href="<?php echo $book_button['url']; ?>" target="<?php echo $book_button['target'] ?: '_self'; ?>"
              class="c-book__button c-button c-button--secondary"><?php echo $book_button['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </section>


    <?php $features_title = get_field('features_title'); ?>
    <?php $features_text = get_field('features_text'); ?>
    <?php $features_list = get_field('features_list'); ?>
    <?php $features_footer_text = get_field('features_footer_text'); ?>
    <?php $features_button = get_field('features_button'); ?>
    <?php $features_bg_image = get_field('features_bg_image'); ?>
    <section class="c-features c-section" style="background-image: url(&quot;<?php echo $features_bg_image; ?>&quot;)">
      <div class="c-features__container c-container">
        <div class="c-features__header">
          <?php if ($features_title): ?>
            <h2 class="c-features__title c-heading-large c-heading-large--white">
              <?php echo $features_title; ?>
            </h2>
          <?php endif; ?>
          <?php if ($features_text): ?>
            <div class="c-features__text c-base-text c-base-text--white">
              <?php echo $features_text; ?>
            </div>
          <?php endif; ?>
        </div>
        <?php if ($features_list): ?>
          <div class="c-features__list">
            <?php foreach ($features_list as $item): ?>
              <div class="c-features__item">
                <?php if ($item['icon']): ?>
                  <?php echo wp_get_attachment_image($item['icon'], 'full', false, ['loading' => 'lazy', 'class' => 'c-features__item-icon']); ?>
                <?php endif; ?>
                <?php if ($item['title']): ?>
                  <h3 class="c-features__item-title"><?php echo $item['title']; ?></h3>
                <?php endif; ?>
                <?php if ($item['text']): ?>
                  <p class="c-features__item-text"><?php echo $item['text']; ?></p>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="c-features__footer">
          <?php if ($features_footer_text): ?>
            <p>
              <strong><?php echo $features_footer_text; ?></strong>
            </p>
          <?php endif; ?>
          <?php if ($features_button): ?>
            <a href="<?php echo $features_button['url']; ?>" target="<?php echo $features_button['target'] ?: '_self'; ?>"
              class="c-features__button c-button c-button--primary"><?php echo $features_button['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <?php $cta_title = get_field('cta_title'); ?>
    <?php $cta_text = get_field('cta_text'); ?>
    <?php $cta_button = get_field('cta_button'); ?>
    <?php $cta_image = get_field('cta_image'); ?>
    <?php $cta_footer_title = get_field('cta_footer_title'); ?>
    <section class="c-cta c-section">
      <div class="c-cta__wrapper c-container">
        <div class="c-base-row">
          <?php if ($cta_image): ?>
            <div class="c-cta__image c-base-row__item-media">
              <?php echo wp_get_attachment_image($cta_image, 'full', false, ['loading' => 'lazy', 'class' => 'c-cta__image-img']); ?>
            </div>
          <?php endif; ?>
          <div class="c-cta__content c-base-row__item-content">
            <?php if ($cta_title): ?>
              <h2 class="c-cta__title c-heading-large">
                <?php echo $cta_title; ?>
              </h2>
            <?php endif; ?>
            <?php if ($cta_text): ?>
              <div class="c-cta__text c-base-text">
                <?php echo $cta_text; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="c-cta__footer">
          <h2 class="c-cta__footer-title c-heading-large">
            <?php echo $cta_footer_title; ?>
          </h2>
          <?php if ($cta_button): ?>
            <a href="<?php echo $cta_button['url']; ?>" target="<?php echo $cta_button['target'] ?: '_self'; ?>"
              class="c-cta__button c-button c-button--primary"><?php echo $cta_button['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <?php $services_title = get_field('services_title'); ?>
    <?php $services_text = get_field('services_text'); ?>
    <?php $services_list = get_field('services_list'); ?>
    <?php $services_bg_image = get_field('services_bg_image'); ?>
    <section class="c-services c-section" style="background-image: url(&quot;<?php echo $services_bg_image; ?>&quot;)">
      <div class="c-services__container c-container">
        <div class="c-services__header">
          <?php if ($services_title): ?>
            <h2 class="c-services__title c-heading-large c-heading-large--white">
              <?php echo $services_title; ?>
            </h2>
          <?php endif; ?>
          <?php if ($services_text): ?>
            <p class="c-services__text c-base-text c-base-text--white">
              <?php echo $services_text; ?>
            </p>
          <?php endif; ?>
        </div>
        <div class="c-services__slider swiper-slider" id="c-services-slider">
          <div class="c-services__slider-wrapper swiper-wrapper">
            <?php foreach ($services_list as $item): ?>
              <div class="c-services__item swiper-slide">
                <a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target'] ?: '_self'; ?>"
                  class="c-services__item-link">
                  <h3 class="c-services__item-title"><?php echo $item['title']; ?></h3>
                  <?php if ($item['image']): ?>
                    <?php echo wp_get_attachment_image($item['image'], 'full', false, ['loading' => 'lazy', 'class' => 'c-services__item-image']); ?>
                  <?php endif; ?>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="c-services__navigation">
          <div class="c-services__navigation-button c-services__navigation-button--prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path
                d="M5.58594 17.0122C5.3125 17.2409 5.3125 17.6982 5.58594 17.965C5.85938 18.2317 6.28906 18.2317 6.5625 17.965L14.4141 10.2287C14.6484 9.96191 14.6484 9.54271 14.4141 9.27594L6.5625 1.57777C6.28906 1.311 5.85938 1.311 5.58594 1.57777C5.3125 1.84454 5.3125 2.26374 5.58594 2.53051L12.7344 9.77137L5.58594 17.0122Z"
                fill="white" />
            </svg>
          </div>
          <div class="c-services__pagination pagination"></div>
          <div class="c-services__navigation-button c-services__navigation-button--next">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <path
                d="M5.58594 17.0122C5.3125 17.2409 5.3125 17.6982 5.58594 17.965C5.85938 18.2317 6.28906 18.2317 6.5625 17.965L14.4141 10.2287C14.6484 9.96191 14.6484 9.54271 14.4141 9.27594L6.5625 1.57777C6.28906 1.311 5.85938 1.311 5.58594 1.57777C5.3125 1.84454 5.3125 2.26374 5.58594 2.53051L12.7344 9.77137L5.58594 17.0122Z"
                fill="white" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <?php $areas_title = get_field('areas_title'); ?>
    <?php $areas_text = get_field('areas_text'); ?>
    <?php $areas_list_title = get_field('areas_list_title'); ?>
    <?php $areas_list = get_field('areas_list'); ?>
    <?php $areas_list_text = get_field('areas_list_text'); ?>
    <?php $areas_image = get_field('areas_image'); ?>
    <section class="c-areas c-section c-section--gray">
      <div class="c-areas__container c-container c-base-row">
        <div class="c-areas__content c-base-row__item-content">
          <?php if ($areas_title): ?>
            <h2 class="c-areas__title c-heading-large">
              <?php echo $areas_title; ?>
            </h2>
          <?php endif; ?>
          <?php if ($areas_text): ?>
            <p class="c-areas__text c-base-text">
              <?php echo $areas_text; ?>
            </p>
          <?php endif; ?>
          <?php if ($areas_list_title): ?>
            <p class="c-areas__text c-base-text"><strong><?php echo $areas_list_title; ?></strong></p>
          <?php endif; ?>
          <?php if ($areas_list): ?>
            <ul class="c-areas__list">
              <?php foreach ($areas_list as $item): ?>
                <li><?php echo $item['text']; ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <?php if ($areas_list_text): ?>
            <p class="c-areas__text c-base-text">
              <?php echo $areas_list_text; ?>
            </p>
          <?php endif; ?>
        </div>
        <?php if ($areas_image): ?>
          <div class="c-areas__image c-base-row__item-media">
            <?php echo wp_get_attachment_image($areas_image, 'full', false, ['loading' => 'lazy', 'class' => 'c-areas__image-img']); ?>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="c-widgets c-section">
      <div class="c-widgets__container c-container">
        <h3 class="c-widgets__title c-heading-large">What Our Clients Say</h3>
        <div class="c-widgets__items">
          <div class="c-widgets__item c-widgets__item--google">
            <div class="c-widgets__item-container c-container">
              <script src="https://static.elfsight.com/platform/platform.js" async></script>
              <div class="elfsight-app-aebd3a6a-d0b4-4bea-8429-7b9e612c33df" data-elfsight-app-lazy></div>
            </div>
          </div>
          <div class="c-widgets__item c-widgets__item--instagram">
            <div class="c-widgets__item-container c-container">
              <script src="https://static.elfsight.com/platform/platform.js" async></script>
              <div class="elfsight-app-182b5bba-854f-4891-b59e-41238966f4c4" data-elfsight-app-lazy></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php $bottom_section_title = get_field('bottom_section_title'); ?>
    <?php $bottom_section_text = get_field('bottom_section_text'); ?>
    <?php $bottom_section_list = get_field('bottom_section_list'); ?>
    <?php $bottom_section_image = get_field('bottom_section_image'); ?>
    <section class="c-bottom c-section c-section--gray">
      <div class="c-container c-base-row">
        <div class="c-base-row__item-content">
          <?php if ($bottom_section_title): ?>
            <h2 class="c-heading-large">
              <?php echo $bottom_section_title; ?>
            </h2>
          <?php endif; ?>
          <?php if ($bottom_section_text): ?>
            <p class="c-base-text">
              <strong><?php echo $bottom_section_text; ?></strong>
            </p>
          <?php endif; ?>
          <?php if ($bottom_section_list): ?>
            <ul>
              <?php foreach ($bottom_section_list as $item): ?>
                <li><?php echo $item['text']; ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
        <?php if ($bottom_section_image): ?>
          <div class="c-base-row__item-media">
            <?php echo wp_get_attachment_image($bottom_section_image, 'full', false, ['loading' => 'lazy', 'class' => 'c-bottom__image-img']); ?>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <?php $bottom_cta_title = get_field('bottom_cta_title'); ?>
    <?php $bottom_cta_text = get_field('bottom_cta_text'); ?>
    <?php $bottom_cta_button = get_field('bottom_cta_button'); ?>
    <?php $bottom_cta_image = get_field('bottom_cta_image'); ?>
    <section class="c-bottom-cta c-section" style="background-image: url(&quot;<?php echo $bottom_cta_image; ?>&quot;)">
      <div class="c-bottom-cta__container c-container">
        <?php if ($bottom_cta_title): ?>
          <h2 class="c-bottom-cta__title c-heading-large c-heading-large--white">
            <?php echo $bottom_cta_title; ?>
          </h2>
        <?php endif; ?>
        <?php if ($bottom_cta_text): ?>
          <div class="c-bottom-cta__text c-base-text c-base-text--white">
            <?php echo $bottom_cta_text; ?>
          </div>
        <?php endif; ?>
        <?php if ($bottom_cta_button): ?>
          <a href="<?php echo $bottom_cta_button['url']; ?>"
            target="<?php echo $bottom_cta_button['target'] ?: '_self'; ?>"
            class="c-bottom-cta__button c-button c-button--primary"><?php echo $bottom_cta_button['title']; ?></a>
        <?php endif; ?>
      </div>
    </section>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script defer>
    (() => {
      const e = () => {
        new Swiper("#c-services-slider", {
          slidesPerView: 4,
          spaceBetween: 32,
          speed: 1100,
          pagination: { el: ".c-services__pagination", clickable: !0 },
          navigation: { nextEl: ".c-services__navigation-button--next", prevEl: ".c-services__navigation-button--prev" },
          breakpoints: {
            0: { slidesPerView: 1.2, spaceBetween: 10 },
            576: { slidesPerView: 2, spaceBetween: 16 },
            768: { slidesPerView: 3, spaceBetween: 24 },
            1024: { slidesPerView: 4, spaceBetween: 32 },
          },
        });
      };
      document.addEventListener("DOMContentLoaded", () => {
        e();
      });
    })();
  </script>
  <script defer>
    const lightbox = GLightbox({
      selector: ".video-lightbox",
      autoplayVideos: true,
    });
  </script>
</div>

<?php get_footer(); ?>
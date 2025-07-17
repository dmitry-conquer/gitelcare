<?php
/**
 * Template Name: Front Template
 * 
 * This is the front page template for GitelCare
 */

// Prevent direct access
if (!defined('ABSPATH')) {
  exit;
}
?>

<link rel="stylesheet" href="<?php echo get_template_directory() . '/css/custom-front.css'; ?>">

<div class="c-wrapper">

  <?php get_header(); ?>

  <main>
    <section class="c-hero">
      <video src="/video.mp4" class="c-hero__video" autoplay muted loop playsinline></video>
      <div class="c-hero__container c-container">
        <div class="c-hero__content">
          <h1 class="c-hero__title">Concierge Medicine</h1>
          <p class="c-hero__subtitle">Personalized Healthcare Solutions</p>
          <div class="c-hero__actions">
            <a href="#about" class="c-hero__button c-button c-button--primary">consult now</a>
          </div>
        </div>
      </div>
      <a href="#" aria-label="scroll down" title="scroll down" class="c-hero__scroll-down">
        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
          <path
            d="M3.48778 5.58594C3.25912 5.3125 2.80181 5.3125 2.53504 5.58594C2.26827 5.85937 2.26827 6.28906 2.53504 6.5625L10.2713 14.4141C10.5381 14.6484 10.9573 14.6484 11.2241 14.4141L18.9222 6.5625C19.189 6.28906 19.189 5.85938 18.9222 5.58594C18.6555 5.3125 18.2363 5.3125 17.9695 5.58594L10.7286 12.7344L3.48778 5.58594Z"
            fill="currentColor" />
        </svg>
      </a>
    </section>

    <section class="c-two-columns c-section" id="about">
      <img src="/images/about.svg" alt="" class="c-two-columns__subtitle" />
      <div class="c-two-columns__container c-container">
        <div class="c-two-columns__content">
          <h2 class="c-two-columns__title c-heading-large">What is concierge medicine</h2>
          <div class="c-two-columns__columns">
            <div class="c-two-columns__column c-base-text">
              <p>
                Concierge medicine is a new type of patient-first healthcare model. Unlike traditional insurance-based
                systems that prioritize volume over quality, this type of care puts the focus
                back where it belongs — on you.
              </p>
            </div>
            <div class="c-two-columns__column c-base-text">
              <p>
                At GitelCare, we believe that quality aid begins with a meaningful relationship between a patient and a
                doctor. That's why we have a membership-based model giving you convenient,
                1:1 access to your specialist — without the long waits, rushed visits, or red tape.
              </p>
            </div>
          </div>
          <a href="#" class="c-two-columns__button c-button c-button--secondary">learn more</a>
        </div>
      </div>
    </section>

    <!-- Add more sections as needed -->

  </main>

  <?php get_footer(); ?>

</div>
<?php
// Підключення стилів тільки для front-template.php
add_action('wp_enqueue_scripts', function () {
    // Debug інформація
    error_log('=== DEBUG STYLES ===');
    error_log('Current template: ' . get_page_template_slug());
    error_log('Is front page: ' . (is_front_page() ? 'YES' : 'NO'));
    
    $css_file = get_template_directory() . '/css/custom-front.css';
    error_log('CSS file path: ' . $css_file);
    error_log('CSS file exists: ' . (file_exists($css_file) ? 'YES' : 'NO'));
    
    // Перевіряємо різні варіанти шаблону
    if (get_page_template_slug() === 'templates/front-template.php' || 
        get_page_template_slug() === 'front-page.php' ||
        is_front_page()) {
        
        error_log('Template matches! Enqueuing styles...');
        $css_version = file_exists($css_file) ? filemtime($css_file) : '1.0';
        
        wp_enqueue_style('custom-front-css', get_template_directory_uri() . '/css/custom-front.css', [], $css_version);
        error_log('Styles enqueued successfully');
    } else {
        error_log('Template does not match any front page template');
    }
});

// Альтернативний спосіб через wp_head
add_action('wp_head', function () {
    if (get_page_template_slug() === 'templates/front-template.php' || 
        get_page_template_slug() === 'front-page.php' ||
        is_front_page()) {
        
        $css_file = get_template_directory() . '/css/custom-front.css';
        $css_url = get_template_directory_uri() . '/css/custom-front.css';
        $css_version = file_exists($css_file) ? filemtime($css_file) : '1.0';
        
        echo '<link rel="stylesheet" href="' . esc_url($css_url) . '?v=' . esc_attr($css_version) . '" />' . "\n";
    }
});
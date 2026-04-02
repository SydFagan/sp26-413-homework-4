<?php
/**
 * Plugin Name: SF Metro Plugin
 * Description: Adds reading time, shortcode features, and site enhancements for Metro Report.
 * Version: 1.0
 * Author: Sydney Fagan
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function sf_enqueue_styles() {
    wp_enqueue_style(
        'sf-metro-style',
        plugin_dir_url( __FILE__ ) . 'css/style.css',
        array(),
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'sf_enqueue_styles' );

function sf_footer_message() {
    echo '<p class="sf-footer-message">📰 Thanks for reading Metro Report!</p>';
}
add_action( 'wp_footer', 'sf_footer_message' );

function sf_reading_time_filter( $content ) {

    if ( is_single() && in_the_loop() && is_main_query() ) {

        $word_count = str_word_count( strip_tags( $content ) );
        $reading_time = ceil( $word_count / 200 );

        $info = '<div class="sf-reading-time">⏱️ ' . esc_html( $reading_time ) . ' min read | 📝 ' . esc_html( $word_count ) . ' words</div>';

        return $info . $content;
    }

    return $content;
}
add_filter( 'the_content', 'sf_reading_time_filter' );

function sf_breaking_news_shortcode( $atts ) {

    $atts = shortcode_atts(
        array(
            'text' => 'Breaking News'
        ),
        $atts
    );

    $output = '<div class="sf-breaking-news">🚨 ' . esc_html( $atts['text'] ) . '</div>';

    return $output;
}
add_shortcode( 'breaking_news', 'sf_breaking_news_shortcode' );

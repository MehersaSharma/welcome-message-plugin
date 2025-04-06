<?php
/**
 * Plugin Name: Welcome Message Dashboard Widget
 * Description: Displays a friendly welcome message on the WordPress admin dashboard.
 * Version: 1.0
 * Author: Mehersa Sharma
 */

function mehersa_add_welcome_dashboard_widget() {
    wp_add_dashboard_widget(
        'mehersa_welcome_widget',
        '👋 Welcome to Your Dashboard!',
        'mehersa_welcome_widget_display'
    );
}

function mehersa_welcome_widget_display() {
    echo "<p>Hi there! 👋<br>Hope you're having a productive day. This is your space – make the most of it!</p>";
}

add_action('wp_dashboard_setup', 'mehersa_add_welcome_dashboard_widget');

<?php

/**
 * Plugin Name: MoroX
 * Description: افزونه مدرن سازی مدیریت وردپرس
 * Version: 1.4
 * Author: Morteza Ghasemi
 * Author URI: https://moroplus.ir
 * Text Domain: morox
 * Domain Path: /languages
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit; // امنیت افزونه
}

// افزودن فایل CSS و JavaScript سفارشی به مدیریت وردپرس
function maui_enqueue_admin_assets()
{
    wp_enqueue_style('modern-admin-style', plugin_dir_url(__FILE__) . 'dist/admin-style.min.css', array(), '1.0');
    wp_enqueue_script('modern-admin-script', plugin_dir_url(__FILE__) . 'dist/admin-script.bundle.js', array('jquery'), '1.0', true);
}

add_action('admin_enqueue_scripts', 'maui_enqueue_admin_assets');

// Add Menu Item
function maui_add_admin_menu_item()
{
    add_menu_page(
        __('موروایکس', 'morox'),
        __('موروایکس', 'morox'),
        'manage_options',
        'morox',
        'maui_render_admin_page',
        plugins_url('assets/icon.webp', __FILE__),
        1
    );
}

function maui_render_admin_page()
{
    echo '<div class="wrap">';
    echo '<h1>' . __('موروایکس', 'morox') . '</h1>';
    echo '<p>' . __('به افزونه مدرن سازی مدیریت وردپرس خوش آمدید.', 'morox') . '</p>';
    echo '<p>' . __('ساخته شده توسط مرتضی قاسمی.', 'morox') . '</p>';
    // Version
    echo '<p>' . __('نسخه 1.4', 'morox') . '</p>';
    echo '</div>';
}

add_action('admin_menu', 'maui_add_admin_menu_item');

function morox_login_stylesheet()
{
    wp_enqueue_style('custom-login', plugin_dir_url(__FILE__) . 'dist/login-style.min.css');
}
add_action('login_enqueue_scripts', 'morox_login_stylesheet');

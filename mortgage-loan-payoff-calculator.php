<?php
/*
Plugin Name: Mortgage Loan Payoff Calculator
Version: 1.0.0
License: GPL2
*/

function mortgage_loan_payoff_calculator()
{
    ob_start();
    wp_enqueue_style('life-calculator-style', plugins_url('style.css?v=' . uniqid(), __FILE__));

    include(plugin_dir_path(__FILE__) . 'template.php');

    wp_register_script('numeral', plugin_dir_url(__FILE__) . 'numeral.min.js', ['jquery']);
    wp_enqueue_script('numeral');

    wp_enqueue_script('moment');

    wp_register_script('canvaswrapper', plugin_dir_url(__FILE__) . 'jquery.canvaswrapper.js', ['jquery']);
    wp_enqueue_script('canvaswrapper');
    wp_register_script('colorhelpers', plugin_dir_url(__FILE__) . 'jquery.colorhelpers.js', ['jquery']);
    wp_enqueue_script('colorhelpers');

    wp_register_script('flot', plugin_dir_url(__FILE__) . 'jquery.flot.js', ['jquery', 'canvaswrapper', 'colorhelpers']);
    wp_enqueue_script('flot');

    wp_register_script('saturated', plugin_dir_url(__FILE__) . 'jquery.flot.saturated.js', ['flot']);
    wp_enqueue_script('saturated');
    wp_register_script('browser', plugin_dir_url(__FILE__) . 'jquery.flot.browser.js', ['flot']);
    wp_enqueue_script('browser');
    wp_register_script('drawSeries', plugin_dir_url(__FILE__) . 'jquery.flot.drawSeries.js', ['flot']);
    wp_enqueue_script('drawSeries');
    wp_register_script('uiConstants', plugin_dir_url(__FILE__) . 'jquery.flot.uiConstants.js', ['flot']);
    wp_enqueue_script('uiConstants');


    wp_register_script('calx', plugin_dir_url(__FILE__) . 'jquery-calx-2.2.8.min.js', ['jquery', 'moment', 'numeral', 'flot']);
    wp_enqueue_script('calx');

    wp_enqueue_script('life-calculator-script', plugins_url('script.js?v=' . uniqid(), __FILE__), array('jquery'), null, true);

    return ob_get_clean();
}
add_shortcode('mortgage-loan-payoff-calculator', 'mortgage_loan_payoff_calculator');

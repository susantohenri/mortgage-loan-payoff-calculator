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
    echo do_shortcode('[calx]');

    wp_register_script('chart', plugin_dir_url(__FILE__) . 'chart.umd.min.js');
    wp_enqueue_script('chart');

    wp_enqueue_script('mortgage-loan-payoff-calculator', plugins_url('mortgage-loan-payoff-calculator.js?v=' . uniqid(), __FILE__), array('jquery', 'chart'), null, true);

    return ob_get_clean();
}
add_shortcode('mortgage-loan-payoff-calculator', 'mortgage_loan_payoff_calculator');

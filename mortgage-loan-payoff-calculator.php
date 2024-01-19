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
    wp_enqueue_script('life-calculator-script', plugins_url('script.js?v=' . uniqid(), __FILE__), array('jquery'), null, true);
    return ob_get_clean();
}
add_shortcode('mortgage-loan-payoff-calculator', 'mortgage_loan_payoff_calculator');

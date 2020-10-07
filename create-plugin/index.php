<?php
/**
 * Plugin Name: W3villa Plugin
 * Plugin URI: http://www.w3villa.com/your-plugin-url-path
 * Description: The very simple plugin to start with.
 * Take this as a base plugin and modify as per your need.
 * Version: 1.0
 * Author: w3villa
 * Author URI: http://www.w3villa.com
 * @copyright 2020, W3villa Technologies, All rights reserved.
 */

// Here we are going to append “Hello World!” text at the places where "simple_plugin" action hook is triggred.
 
function w3villa_says_hello_world() {

    echo "Hello World !"

}

add_filter( 'simple_plugin', 'w3villa_says_hello_world' ); //need an action "smple-plugin" for place where we want to hook into in order to display the "Hello World!" string



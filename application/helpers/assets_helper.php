<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// CSS =======================================================================================

if ( ! function_exists('css_url')){
	function css_url($nom){
		return base_url() . 'assets/css/' . $nom . '.css';
	}
}

if(!function_exists('load_css')){
	function load_css($nom,$other=''){
		return '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/css/'.$nom.'.css" '.$other.' />';
	}
}

if ( ! function_exists('css_php')){
	function css_php($nom){
		return base_url(). 'assets/php/' . $nom . '.php';
	}
}

if (!function_exists('load_css_php')){
	function load_css_php($nom){
		return '<link rel="stylesheet" type="text/css" media="all" href="'.css_php($nom).'" >';
	}
}

// JAVASCRIPT =======================================================================================

if ( ! function_exists('js_url')){
	function js_url($nom){
		return base_url() . 'assets/js/' . $nom . '.js';
	}
}

if(!function_exists('load_js')){
	function load_js($nom,$other=''){
		return '<script type="text/javascript" src="'.js_url($nom).'" '.$other.'></script>';
	}
}

// IMAGE =======================================================================================


if ( ! function_exists('img_url')){
	function img_url($nom){
		return base_url() . 'assets/images/' . $nom;
	}
}

if ( ! function_exists('img')){
	function img($nom, $alt = ''){
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
	}
}

if ( ! function_exists('img_class')){
	function img_class($nom, $alt = '', $class = ''){
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" class="' . $class . '" />';
	}
}

if(!function_exists('img_oth')){
	function img_oth($nom,$oth){
		return '<img src="'.img_url($nom).'" '.$oth.' />';
	}
}
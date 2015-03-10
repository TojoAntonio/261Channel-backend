<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('lien'))
{
	function lien($url,$nom,$other = '')
	{
		return '<a href="'.site_url().$url.'" '.$other.' >'.$nom.'</a>';
	}
}
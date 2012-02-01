<?php

if ( ! function_exists('site_name'))
{
	function site_name()
	{
		$CI =& get_instance();
		return $CI->config->item('website_name', 'tank_auth');
	}
}

?>

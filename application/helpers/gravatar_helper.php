<?php

if ( ! function_exists('gravatar_image'))
{
	function gravatar_image( $email )
	{
		$hash = md5( strtolower( trim( $email ) ) ); 
		return "<img class='gravatar' src='http://www.gravatar.com/avatar/$hash' />";
	}
}

?>

<?php
function youtube($atts) {
	extract(shortcode_atts(array(
		"value" => 'http://',
		"width" => '475',
		"height" => '350',
		"name"=> 'movie',
		"allowFullScreen" => 'true',
		"allowScriptAccess"=>'always',
		"controls"=> '1',
	), $atts));
	return '<object style="height: '.$height.'px; width: '.$width.'px"><param name="'.$name.'" value="'.$value.'"><param name="allowFullScreen" value="'.$allowFullScreen.'"><param name="allowScriptAccess" value="'.$allowScriptAccess.'"><embed src="'.$value.'" type="application/x-shockwave-flash" allowfullscreen="'.$allowFullScreen.'" allowScriptAccess="'.$allowScriptAccess.'" width="'.$width.'" height="'.$height.'"></object>';
}
add_shortcode("youtube", "youtube");
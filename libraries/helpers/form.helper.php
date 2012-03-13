<?php if ( ! defined('BASE_PATH')) exit('No direct script access allowed');

if (!function_exists('form_open'))
{
    function form_open(array $attributes)
    {
		// Om put används som metod så läggs en input hidden till med metoden put.
		$is_put = false;
        $html = '<form';
		if (!empty($attributes)) {
			foreach ($attributes as $attribute => $value) {
				if (in_array($attribute, array('action', 'method', 'id', 'class', 'enctype')) and !empty($value)) {
					// assign default value to 'method' attribute
					if ($attribute === 'method' and ($value !== 'post' or $value !== 'get')) {
						if ($value == 'put')
							$is_put = true;
						$value = 'post';
						
					}
					
					if ($attribute === 'action') {
						$value = BASE_URL . $value;
					}
					
					$html .= ' '.$attribute.'="'.$value.'"';
				}
			}
		}
		if ($is_put == true)
			return $html.'>'."\r".'<input type="hidden" name="_method" value="put" />'."\r";
		else
			return $html.'>'."\r";
    }
}
?>
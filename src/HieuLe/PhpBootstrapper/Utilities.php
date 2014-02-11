<?php

namespace HieuLe\PhpBootstrapper;
/**
 * Description of Utilities
 *
 * @author TrungHieu
 */
class Utilities
{
    public static function escAttr($input)
    {
	return htmlspecialchars(trim($input), ENT_QUOTES | ENT_HTML5, 'UTF-8', false);
    }
    
    public static function escHtml($input)
    {
	return htmlentities($input, ENT_NOQUOTES | ENT_HTML5, 'UTF-8', false);
    }
    
    public static function mergeParams(array $default, array $option)
    {
	return array_merge($default, $option);
    }
}

?>

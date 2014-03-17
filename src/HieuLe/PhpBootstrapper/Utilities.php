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
	return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8', false);
    }
    
    public static function escHtml($input)
    {
	return htmlentities($input, ENT_NOQUOTES, 'UTF-8', false);
    }
    
    public static function mergeParams(array $default, array $options)
    {
	return array_merge($default, $options);
    }
}

?>

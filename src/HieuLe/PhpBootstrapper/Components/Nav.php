<?php

namespace HieuLe\PhpBootstrapper\Components;

use HieuLe\PhpBootstrapper\Utilities;

/**
 * Description of Nav
 *
 * @author TrungHieu
 */
class Nav
{

    const UL_CLASS = 'nav';
    const UL_TAB_CLASS = 'nav-tabs';
    const LI_ACTIVE_CLASS = 'active';

    public static function tabs(array $items, $options = array(), $activeIndex = 0)
    {
	$defaultOptions = array(
	    'ul_attr' => array(),
	    'ul_class' => '',
	    'li_attr' => array(),
	    'li_class' => '',
	);
	
	return trim($html->saveHTML());
    }

}

?>

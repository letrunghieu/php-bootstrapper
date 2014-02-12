<?php

namespace HieuLe\PhpBootstrapper;

use HieuLe\PhpHtmlDom\Node\Element;

/**
 * Create bootstrap component
 *
 * @package PhpBootstrapper
 * @author TrungHieu
 */
class Component
{

    const CLASS_SUCCESS = 'success';
    const CLASS_INFO = 'info';
    const CLASS_WARNING = 'warning';
    const CLASS_DANGER = 'danger';

    public static function alert($content, $mode, $dismisable = false)
    {
	$div = new Element('div');
	$div->addClass("alert alert-{$mode}");
	if ($dismisable != FALSE)
	{
	    if (!is_string($dismisable))
		$dismisable = "&times;";
	    $closeBtn = new Element('button');
	    $closeBtn->appendText($dismisable)
		    ->setAttr('type', 'button')
		    ->setAttr('class', 'close')
		    ->setAttr('data-dismiss', 'alert');
	    $div->appendChild($closeBtn)->addClass('alert-dismissable');
	}
	$div->appendText($content);
	return $div->html();
    }
    
    public static function badge($content)
    {
	$span = new Element('span');
	$span->addClass('badge')->appendText($content);
	return $span->html();
    }

}

?>

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
    const CLASS_ACTIVE = 'active';

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

    /**
     * 
     * @param array $data   Each data element can be a string or an array
     * <pre>
     * [
     *   link: "the url of this item",
     *   text: "the link anchor"
     * ]   
     * </pre> 
     * @param bool $useActive
     * @return string
     */
    public static function breadcrumb($data, $useActive = true)
    {
	$ol = new Element('ol');
	$ol->addClass('breadcrumb');
	$lastIdx = count($data) - 1;
	foreach ($data as $i => $d)
	{
	    $li = new Element('li');
	    if ($useActive && $i == $lastIdx)
		$li->addClass(static::CLASS_ACTIVE);
	    if (is_array($d))
	    {
		$link = new Element('a');
		$link->setAttr('href', $d['link'])->appendText($d['text'])->appendTo($li);
	    } else
	    {
		$li->appendText($d);
	    }
	    $li->appendTo($ol);
	}
	return $ol->html();
    }

}

?>

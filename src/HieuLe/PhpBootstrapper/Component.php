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

    // button classes
    const CLASS_BTN_INFO = 'info';
    const CLASS_BTN_DEFAULT = 'default';
    const CLASS_BTN_PRIMARY = 'primary';
    const CLASS_BTN_SUCCESS = 'success';
    const CLASS_BTN_WARNING = 'warning';
    const CLASS_BTN_DANGER = 'danger';
    const CLASS_BTN_LINK = 'link';

    // sizes
    const CLASS_SIZE_XSMALL = 'xs';
    const CLASS_SIZE_SMALL = 'sm';
    const CLASS_SIZE_LARGE = 'lg';

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

    /**
     * 
     * @param string $content
     * @param array $options	allowed options
     * <ul>
     * 	<li><code>element</code>: use 'a' or 'button' element</li>
     * 	<li><code>attrs</code>: array of attributes</li>
     * 	<li><code>size</code>: the size of button</li>
     * 	<li><code>type</code>: the type of button</li>
     * </ul>
     */
    public static function button($content, $options = array())
    {
	$default = array(
	    'element' => 'button',
	    'attrs' => array(),
	    'size' => '',
	    'type' => static::CLASS_BTN_DEFAULT
	);
	$options = Utilities::mergeParams($default, $options);
	$element = new Element($options['element']);
	if ($options['element'] == 'button')
	    $element->setAttr('type', 'button');
	$element->addClass('btn')->addClass("btn-{$options['type']}")->appendText($content);
	if ($options['size'])
	    $element->addClass("btn-{$options['size']}");
	if (isset($options['attrs']['class']))
	{
	    $element->addClass($options['attrs']['class']);
	    unset($options['attrs']['class']);
	}
	foreach ($options['attrs'] as $attr => $val)
	{
	    $element->setAttr($attr, $val);
	}
	return $element->html();
    }

    /**
     * 
     * @param array $buttons	array of inner buttons
     * @param array $options	allowed options
     * <ul>
     * 	<li><code>attrs</code>: array of attributes</li>
     * 	<li><code>size</code>: the size of button</li>
     * </ul>
     */
    public static function buttonGroup($buttons, $options = array())
    {
	$default = array(
	    'attrs' => array(),
	    'size' => '',
	);
	$options = Utilities::mergeParams($default, $options);
	$div = new Element('div');
	$div->addClass('btn-group');
	if ($options['size'])
	    $div->addClass("btn-group-{$options['size']}");
	if (isset($options['attrs']['class']))
	{
	    $div->addClass($options['attrs']['class']);
	    unset($options['attrs']['class']);
	}
	foreach ($options['attrs'] as $attr => $val)
	{
	    $div->setAttr($attr, $val);
	}
	foreach ($buttons as $btn)
	{
	    $div->appendText($btn);
	}
	return $div->html();
    }

    public static function buttonToolbar($buttonGroup, $attrs = array())
    {
	$div = new Element('div');
	$div->addClass('btn-toolbar')->appendText($buttonGroup)->setAttr('role', 'toolbar');
	if (isset($attrs['class']))
	{
	    $div->addClass($attrs['class']);
	    unset($attrs['class']);
	}
	foreach ($attrs as $attr => $val)
	{
	    $div->setAttr($attr, $val);
	}
	return $div->html();
    }

    public static function dropdown($items, $attrs = array())
    {
	$div = new Element('ul');
	$div->addClass('dropdown-menu');
	if (isset($attrs['class']))
	{
	    $div->addClass($attrs['class']);
	    unset($attrs['class']);
	}
	foreach ($attrs as $attr => $val)
	{
	    $div->setAttr($attr, $val);
	}
	foreach ($items as $item)
	{
	    $li = new Element('li');
	    if (is_string($item))
	    {
		$li->appendText($item);
	    } else if (is_array($item))
	    {
		if (isset($item['divider']) && $item['divider'])
		{
		    $li->addClass('divider');
		} else if (isset($item['header']))
		{
		    $li->addClass('dropdown-header')->appendText($item['header']);
		} else
		{
		    if (isset($item['link']))
		    {
			$link = new Element('a');
			$link->setAttr('href', $item['link'])->appendText($item['text'])->appendTo($li);
		    } else
		    {
			$li->appendText($item['text']);
		    }
		    if (isset($item['disable']) && $item['disable'])
			$li->addClass('disable');
		}
	    }
	    $li->appendTo($div);
	}
	return $div->html();
    }

}

?>

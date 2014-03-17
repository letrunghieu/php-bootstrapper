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
    // sizes

    const CLASS_SIZE_XSMALL = 'xs';
    const CLASS_SIZE_SMALL = 'sm';
    const CLASS_SIZE_LARGE = 'lg';
    const CLASS_DROPUP = 'dropup';
    const CLASS_BTN_GROUP_VERT = 'btn-group-vertical';
    const CLASS_BTN_GROUP_JUSTIFY = 'btn-group-justified';

    // modifier classes
    const MODIFIER_ACTIVE = 'active';
    const MODIFIER_DANGER = 'danger';
    const MODIFIER_DEFAULT = 'default';
    const MODIFIER_INFO = 'info';
    const MODIFIER_LINK = 'link';
    const MODIFIER_PRIMARY = 'primary';
    const MODIFIER_SUCCESS = 'success';
    const MODIFIER_WARNING = 'warning';

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
		$li->addClass(static::MODIFIER_ACTIVE);
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
	    'type' => static::MODIFIER_DEFAULT
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

    public static function buttonDropdownToggle($content, $options = array())
    {
	if (!isset($options['attrs']))
	    $options['attrs'] = array();
	if (!isset($options['attrs']['class']))
	    $options['attrs']['class'] = "";
	$options['attrs']['class'] .= ' dropdown-toggle';
	$options['attrs']['data-toggle'] = 'dropdown';
	return static::button($content, $options);
    }

    public static function caret()
    {
	$span = new Element('span');
	return $span->addClass('caret')->html();
    }

    public static function label($content, $modifier, $attrs = array())
    {
	$span = new Element('span');
	$span->addClass("label label-{$modifier}");
	if (isset($attrs['class']))
	{
	    $span->addClass($attrs['class']);
	    unset($attrs['class']);
	}
	foreach ($attrs as $attr => $val)
	{
	    $span->setAttr($attr, $val);
	}
	$span->appendText($content);
	return $span->html();
    }

    public static function nav($items, $attrs = array())
    {
	$div = new Element('ul');
	$div->addClass('nav');
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
	    $link = new Element('a');
	    $link->setAttr('href', $item['link'])->appendText($item['text'])->appendTo($li);
	    $li->appendTo($div);
	}
	return $div->html();
    }

    public static function listGroupOpen($attrs = array())
    {
	return static::_listGroupOpen('ul', $attrs);
    }

    public static function linkListGroupOpen($attrs = array())
    {
	return static::_listGroupOpen('div', $attrs);
    }
    
    public static function listGroupClose()
    {
	return static::_listGroupClose('ul');
    }
    
    public static function linkListGroupClose()
    {
	return static::_listGroupClose('div');
    }

    public static function listGroupItem($content, $attrs = array(), $modifier = '')
    {
	return static::_listGroupItem('li', $content, $attrs, $modifier);
    }

    public static function linkListGroupItem($content, $attrs = array(), $modifier = '')
    {
	return static::_listGroupItem('a', $content, $attrs, $modifier);
    }

    private static function _listGroupOpen($itemElement, $attrs)
    {
	$element = new Element($itemElement);
	$element->addClass('list-group');
	if (isset($attrs['class']))
	{
	    $element->addClass($attrs['class']);
	    unset($attrs['class']);
	}
	foreach ($attrs as $attr => $val)
	{
	    $element->setAttr($attr, $val);
	}
	$formatter =  new \HieuLe\PhpHtmlDom\HTML\Formatter();
	return $formatter->writeElementOpenningTag($element);
    }
    
    private static function _listGroupClose($itemElement)
    {
	return "</{$itemElement}>";
    }

    private static function _listGroupItem($itemElement, $content, $attrs = array(), $modifier = '')
    {
	$item = new Element($itemElement);
	$item->addClass('list-group-item');
	if ($modifier)
	    $item->addClass("list-group-item-{$modifier}");
	if (isset($attrs['class']))
	{
	    $item->addClass($attrs['class']);
	    unset($attrs['class']);
	}
	foreach ($attrs as $attr => $val)
	{
	    $item->setAttr($attr, $val);
	}
	$item->appendText($content);
	return $item->html();
    }

}

?>

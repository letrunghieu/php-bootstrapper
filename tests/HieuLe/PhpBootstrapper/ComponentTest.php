<?php

use HieuLe\PhpBootstrapper\Component;

/**
 * Description of ComponentTest
 *
 * @author TrungHieu
 */
class ComponentTest extends PHPUnit_Framework_TestCase
{

    public function testAlert()
    {
	$html = <<<HTML
<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">
    Đóng
  </button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>

HTML;
	$this->assertSame($html, Component::alert("<strong>Warning!</strong> Better check yourself, you're not looking too good.", Component::MODIFIER_WARNING, "Đóng"));

	$html = <<<HTML
<div class="alert alert-warning">
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>

HTML;
	$this->assertSame($html, Component::alert("<strong>Warning!</strong> Better check yourself, you're not looking too good.", Component::MODIFIER_WARNING));
    }

    public function testBadge()
    {
	$html = <<<HTML
<span class="badge">
  42
</span>

HTML;
	$this->assertSame($html, Component::badge(42));
    }

    public function testBreadcrumb()
    {
	$html = <<<HTML
<ol class="breadcrumb"></ol>

HTML;
	$this->assertSame($html, Component::breadcrumb(array()));

	$html = <<<HTML
<ol class="breadcrumb">
  <li>
    <a href="#">
      Home
    </a>
  </li>
  <li>
    <a href="#">
      Library
    </a>
  </li>
  <li class="active">
    Data
  </li>
</ol>

HTML;
	$data = array(
	    array(
		'link' => '#',
		'text' => 'Home'
	    ),
	    array(
		'link' => '#',
		'text' => 'Library'
	    ),
	    'Data'
	);
	$this->assertSame($html, Component::breadcrumb($data));
    }

    public function testButton()
    {
	$html = <<<HTML
<button type="button" class="btn btn-default">
  Default
</button>

HTML;
	$this->assertSame($html, Component::button('Default'));

	$html = <<<HTML
<a class="btn btn-default">
  Default
</a>

HTML;
	$this->assertSame($html, Component::button('Default', array(
		    'element' => 'a'
	)));

	$html = <<<HTML
<button type="button" class="btn btn-success btn-lg">
  Default
</button>

HTML;
	$this->assertSame($html, Component::button('Default', array(
		    'type' => Component::MODIFIER_SUCCESS,
		    'size' => Component::CLASS_SIZE_LARGE,
	)));

	$html = <<<HTML
<button type="button" class="btn btn-success btn-lg" data-foo="bar" data-bar>
  Default
</button>

HTML;
	$this->assertSame($html, Component::button('Default', array(
		    'type' => Component::MODIFIER_SUCCESS,
		    'size' => Component::CLASS_SIZE_LARGE,
		    'attrs' => array(
			'data-foo' => 'bar',
			'data-bar' => true,
		    )
	)));
    }

    public function testButtonGroup()
    {
	$html = <<<HTML
<div class="btn-group">
  <button type="button" class="btn btn-default">
  Left
</button>

  <button type="button" class="btn btn-default">
  Middle
</button>

  <button type="button" class="btn btn-default">
  Right
</button>

</div>

HTML;
	$buttons = array(
	    Component::button('Left'),
	    Component::button('Middle'),
	    Component::button('Right'),
	);
	$this->assertSame($html, Component::buttonGroup($buttons));
    }

    public function testButtonToolbar()
    {
	$html = <<<HTML
<div class="btn-toolbar" role="toolbar">
  <div class="btn-group">
  <button type="button" class="btn btn-default">
  Left
</button>

  <button type="button" class="btn btn-default">
  Middle
</button>

  <button type="button" class="btn btn-default">
  Right
</button>

</div>

</div>

HTML;
	$buttons = array(
	    Component::button('Left'),
	    Component::button('Middle'),
	    Component::button('Right'),
	);
	$this->assertSame($html, Component::buttonToolbar(Component::buttonGroup($buttons)));
    }

    public function testDropdown()
    {
	$html = <<<HTML
<ul class="dropdown-menu" role="menu">
  <li class="dropdown-header">
    Dropdown header
  </li>
  <li>
    <a href="#">
      Action
    </a>
  </li>
  <li class="disable">
    <a href="#">Another action</a>
  </li>
  <li class="disable">
    <a href="#">
      Third action
    </a>
  </li>
  <li class="divider"></li>
  <li class="dropdown-header">
    Dropdown header
  </li>
  <li>
    <a href="#">Another action</a>
  </li>
</ul>

HTML;
	$items = array(
	    array(
		'header' => 'Dropdown header'
	    ),
	    array(
		'link' => '#',
		'text' => 'Action'
	    ),
	    array(
		'disable' => true,
		'text' => '<a href="#">Another action</a>'
	    ),
	    array(
		'disable' => true,
		'link' => '#',
		'text' => 'Third action'
	    ),
	    array(
		'divider' => true,
	    ),
	    array(
		'header' => 'Dropdown header'
	    ),
	    '<a href="#">Another action</a>'
	);

	$this->assertSame($html, Component::dropdown($items, array('role' => 'menu')));
    }

    public function testCaret()
    {
	$html = <<<HTML
<span class="caret"></span>

HTML;
	$this->assertSame($html, Component::caret());
    }

    public function testButtonDropdownToggle()
    {
	$html = <<<HTML
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
  Dropdown
</button>

HTML;
	$this->assertSame($html, Component::buttonDropdownToggle('Dropdown'));
    }

    public function testLabel()
    {
	$html = <<<HTML
<span class="label label-success">
  Foo
</span>

HTML;
	$this->assertSame($html, Component::label('Foo', Component::MODIFIER_SUCCESS));
	$html = <<<HTML
<span class="label label-success class-foo" data-bar="baz">
  Foo
</span>

HTML;
	$this->assertSame($html, Component::label('Foo', Component::MODIFIER_SUCCESS, array('class' => 'class-foo', 'data-bar' => 'baz')));
    }

    public function testListGroupOpen()
    {
	$html = <<<HTML
<ul class="list-group">
HTML;
	$this->assertSame($html, Component::listGroupOpen());
	$html = <<<HTML
<div class="list-group foo" data-bar="baz">
HTML;
	$this->assertSame($html, Component::linkListGroupOpen(array('class' => 'foo', 'data-bar' => 'baz')));
    }

    public function testListGroupClose()
    {
	$this->assertSame("</ul>", Component::listGroupClose());
	$this->assertSame("</div>", Component::linkListGroupClose());
    }

    public function testListGroupItem()
    {
	$html = <<<HTML
<li class="list-group-item">
  Foo
</li>

HTML;
	$this->assertSame($html, Component::listGroupItem('Foo'));

	$html = <<<HTML
<a class="list-group-item list-group-item-warning foo" href="#">
  Foo
</a>

HTML;
	$this->assertSame($html, Component::linkListGroupItem("Foo", array('class' => 'foo', 'href' => '#'), Component::MODIFIER_WARNING));
    }

    public function testProgress()
    {
	$html = <<<HTML
<div class="progress">
  <div class="progress-bar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
</div>

HTML;
	$this->assertSame($html, Component::progress(20));

	$html = <<<HTML
<div class="progress progress-striped active sm">
  <div class="progress-bar progress-bar-danger foo" data-foo="bar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
</div>

HTML;
	$this->assertSame($html, Component::progress(array('value' => 20, 'modifier' => Component::MODIFIER_DANGER, 'attrs' => array('class' => 'foo', 'data-foo' => 'bar')), array('class' => 'sm'), true, true));
    }

}

?>

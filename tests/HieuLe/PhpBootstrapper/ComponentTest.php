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
	$this->assertSame($html, Component::alert("<strong>Warning!</strong> Better check yourself, you're not looking too good.", Component::CLASS_WARNING, "Đóng"));

	$html = <<<HTML
<div class="alert alert-warning">
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>

HTML;
	$this->assertSame($html, Component::alert("<strong>Warning!</strong> Better check yourself, you're not looking too good.", Component::CLASS_WARNING));
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
		    'type' => Component::CLASS_SUCCESS,
		    'size' => Component::CLASS_SIZE_LARGE,
	)));

	$html = <<<HTML
<button type="button" class="btn btn-success btn-lg" data-foo="bar" data-bar>
  Default
</button>

HTML;
	$this->assertSame($html, Component::button('Default', array(
		    'type' => Component::CLASS_SUCCESS,
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

}

?>

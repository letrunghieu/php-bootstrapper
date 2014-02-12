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
	$data  =array(
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
}

?>

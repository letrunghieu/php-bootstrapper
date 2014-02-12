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
}

?>

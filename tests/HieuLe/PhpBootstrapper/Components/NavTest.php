<?php

use HieuLe\PhpBootstrapper\Components\Nav;

/**
 * Description of NavTest
 *
 * @author TrungHieu
 */
class NavTest extends PHPUnit_Framework_TestCase
{
    public function testTabsSimpliest()
    {
	$items = array(
	    
	);
	$expected = <<<HTML
<ul class="nav nav-tabs"></ul>
HTML;
	$this->assertSame($expected, Nav::tabs($items));
    }
    
    public function testTabsWithStringItem()
    {
	$items = array(
	    'foo',
	    '<a>bar</a>'
	);
	$expected = <<<HTML
<ul class="nav nav-tabs"></ul>
HTML;
	$this->assertSame($expected, Nav::tabs($items));
    }
}

?>

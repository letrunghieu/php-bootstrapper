<?php

use HieuLe\PhpBootstrapper\Icon;

/**
 * Description of IconTest
 *
 * @author TrungHieu
 */
class IconTest extends PHPUnit_Framework_TestCase
{
    public function testIcon()
    {
	$html = <<<HTML
<i class="glyphicon glyphicon-book"></i>

HTML;
	$this->assertSame($html, Icon::glyphicon(Icon::GLYPH_BOOK));
	
	$html = <<<HTML
<i class="fa fa-adjust"></i>

HTML;
	$this->assertSame($html, Icon::fa(Icon::FA_ADJUST));
    }
}

?>

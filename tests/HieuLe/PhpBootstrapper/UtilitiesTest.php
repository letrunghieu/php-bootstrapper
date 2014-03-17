<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UtilitiesTest
 *
 * @author TrungHieu
 */
class UtilitiesTest extends \PHPUnit_Framework_TestCase
{
    public function testEscAttr()
    {
	$this->assertEquals("a&amp;b", \HieuLe\PhpBootstrapper\Utilities::escAttr("a&b"));
	$this->assertEquals("a&quot;b", \HieuLe\PhpBootstrapper\Utilities::escAttr("a\"b"));
	$this->assertEquals("a&#039;b", \HieuLe\PhpBootstrapper\Utilities::escAttr("a'b"));
	$this->assertEquals("acb", \HieuLe\PhpBootstrapper\Utilities::escAttr("acb"));
    }
    
    public function testParseParams()
    {
	$this->assertSame(array('ul_class'=>'foo'), \HieuLe\PhpBootstrapper\Utilities::mergeParams(array(), array('ul_class' => 'foo')));
    }
    
    public function testParseParamsOverrideDefault()
    {
	$this->assertSame(array('ul_class'=>'foo'), \HieuLe\PhpBootstrapper\Utilities::mergeParams(array('ul_class'=>'bar'), array('ul_class' => 'foo')));
    }
    
}

?>

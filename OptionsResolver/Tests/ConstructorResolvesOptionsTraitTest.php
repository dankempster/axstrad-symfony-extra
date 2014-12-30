<?php
/**
 * This file is part of the Axstrad library.
 *
 * (c) Dan Kempster <dev@dankempster.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Dan Kempster <dev@dankempster.co.uk>
 * @package Axstrad\Common
 * @subpackage Traits
 */
namespace Axstrad\Symfony\OptionsResolver\Tests;


/**
 * Axstrad\Symfony\OptionsResolver\ConstructorResolvesOptionsTraitTest
 *
 * covers Axstrad\Symfony\OptionsResolver\ConstructorResolvesOptionsTrait
 * @uses Axstrad\Symfony\OptionsResolver\ConstructorResolvesOptionsTrait
 */
class ConstructorResolvesOptionsTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     */
    public function testConstructor()
    {
        $data = array('foo' => 1);

        $mock = $this->getMockForAbstractClass(
            __NAMESPACE__.'\ConstructorResolvesOptionsTestClass',
            array(),
            "",
            null,
            true
        );
        $mock->expects($this->once())
            ->method('setResolvedOptions')
            ->with($this->equalTo($data))
        ;
        $mock->construct($data);
    }
}

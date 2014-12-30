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

use Axstrad\Symfony\OptionsResolver\ConstructorResolvesOptionsTrait;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


/**
 * Axstrad\Symfony\OptionsResolver\Tests\ConstructorResolvesOptionsTestClass
 */
abstract class ConstructorResolvesOptionsTestClass
{
    use ConstructorResolvesOptionsTrait {
        ConstructorResolvesOptionsTrait::__construct as construct;
    }

    protected function configureOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setRequired(array(
            'foo'
        ));
    }
}

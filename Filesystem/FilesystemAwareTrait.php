<?php
/**
 * This file is part of the Axstrad library.
 *
 * (c) Dan Kempster <dev@dankempster.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2014-2015 Dan Kempster <dev@dankempster.co.uk>
 */
namespace Axstrad\Symfony\Filesystem;

use Symfony\Component\Filesystem\Filesystem;

/**
 * Axstrad\Symfony\Filesystem\FilesystemAwareTrait
 *
 * @author Dan Kempster <dev@dankempster.co.uk>
 * @package Axstrad\Symfony
 * @subpackage Filesystem
 */
trait FilesystemAwareTrait
{
    /**
     * @var Filesystem
     */
    private $filesystem = null;

    /**
     * @return Filesystem
     */
    protected function getFilesystem()
    {
        return $this->filesystem ?: $this->filesystem = new Filesystem;
    }

    /**
     * Set the Filesystem object
     *
     * Intended for use by Unit tests.
     *
     * @param Filesystem $filesystem
     * @return self
     */
    public function setFilesystem(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
        return $this;
    }
}

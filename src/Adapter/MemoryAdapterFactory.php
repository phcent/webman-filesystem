<?php
declare(strict_types=1);
/**
 *-------------------------------------------------------------------------p*
 *
 *-------------------------------------------------------------------------h*
 * @copyright  Copyright (c) 2015-2021 Phcent Inc. (http://www.phcent.com)
 *-------------------------------------------------------------------------c*
 * @license    http://www.phcent.com        p h c e n t . c o m
 *-------------------------------------------------------------------------e*
 * @link       http://www.phcent.com
 *-------------------------------------------------------------------------n*
 * @since      象讯·PHP商城系统Pro
 *-------------------------------------------------------------------------t*
 */


namespace Phcent\WebmanFilesystem\Adapter;

use League\Flysystem\InMemory\InMemoryFilesystemAdapter;
use Phcent\WebmanFilesystem\Contract\AdapterFactoryInterface;

class MemoryAdapterFactory implements AdapterFactoryInterface
{
    public function make(array $options)
    {
        return new InMemoryFilesystemAdapter();
    }
}
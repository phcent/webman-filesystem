<?php
declare(strict_types=1);
/**
 *-------------------------------------------------------------------------p*
 * 阿里云OSS
 *-------------------------------------------------------------------------h*
 * @copyright  Copyright (c) 2015-2021 Phcent Inc. (http://www.phcent.com)
 *-------------------------------------------------------------------------c*
 * @license    http://www.phcent.com        p h c e n t . c o m
 *-------------------------------------------------------------------------e*
 * @link       http://www.phcent.com
 *-------------------------------------------------------------------------n*
 * @since      8988354@qq.com
 *-------------------------------------------------------------------------t*
 */
namespace Phcent\WebmanFilesystem\Adapter;

use Phcent\WebmanFilesystem\Contract\AdapterFactoryInterface;
use Phcent\FilesystemOss\OssAdapter;

class AliyunOssAdapterFactory implements AdapterFactoryInterface
{
    public function make(array $options)
    {
        return new OssAdapter($options);
    }
}
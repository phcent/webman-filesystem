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

use Aws\Handler\GuzzleV6\GuzzleHandler;
use Aws\S3\S3Client;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use League\Flysystem\AwsS3V3\AwsS3V3Adapter;
use Phcent\WebmanFilesystem\Contract\AdapterFactoryInterface;

class S3AdapterFactory implements AdapterFactoryInterface
{
    public function make(array $options)
    {
        $handler = new GuzzleHandler();
        $options = array_merge($options, ['http_handler' => $handler]);
        $client = new S3Client($options);
        return new AwsS3V3Adapter($client, $options['bucket_name'], '');
    }
}
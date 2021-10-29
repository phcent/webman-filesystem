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
 * @since      8988354@qq.com
 *-------------------------------------------------------------------------t*
 */


namespace Phcent\WebmanFilesystem\Adapter;

use League\Flysystem\Adapter\Ftp;
use League\Flysystem\Ftp\ConnectivityCheckerThatCanFail;
use League\Flysystem\Ftp\FtpAdapter;
use League\Flysystem\Ftp\FtpConnectionOptions;
use League\Flysystem\Ftp\NoopCommandConnectivityChecker;
use Phcent\WebmanFilesystem\Contract\AdapterFactoryInterface;

class FtpAdapterFactory implements AdapterFactoryInterface
{
    public function make(array $options)
    {
            $options = FtpConnectionOptions::fromArray($options);
            $connectivityChecker = new ConnectivityCheckerThatCanFail(new NoopCommandConnectivityChecker());
            return new FtpAdapter($options, null, $connectivityChecker);
    }
}
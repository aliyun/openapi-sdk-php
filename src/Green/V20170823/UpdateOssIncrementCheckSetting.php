<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getImageAutoFreeze()
 * @method $this withImageAutoFreeze($value)
 * @method string getVideoSceneList()
 * @method $this withVideoSceneList($value)
 * @method string getAutoFreezeType()
 * @method $this withAutoFreezeType($value)
 * @method string getImageSceneList()
 * @method $this withImageSceneList($value)
 * @method string getBucketConfigList()
 * @method $this withBucketConfigList($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getImageScanLimit()
 * @method $this withImageScanLimit($value)
 * @method string getVideoAutoFreezeSceneList()
 * @method $this withVideoAutoFreezeSceneList($value)
 * @method string getVideoFrameInterval()
 * @method $this withVideoFrameInterval($value)
 * @method string getVideoMaxSize()
 * @method $this withVideoMaxSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getVideoMaxFrames()
 * @method $this withVideoMaxFrames($value)
 */
class UpdateOssIncrementCheckSetting extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}

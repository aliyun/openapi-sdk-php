<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getReAuthInfo()
 * @method $this withReAuthInfo($value)
 * @method string getPlayConfig()
 * @method $this withPlayConfig($value)
 * @method string getAuthInfoTimeout()
 * @method $this withAuthInfoTimeout($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetVideoPlayAuth extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}

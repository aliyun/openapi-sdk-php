<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getResultTypes()
 * @method $this withResultTypes($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetVideoInfo extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}

<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUpdateContent()
 * @method $this withUpdateContent($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceRealOwnerId()
 * @method $this withResourceRealOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateImageInfos extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}

<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getJobIds()
 * @method $this withJobIds($value)
 * @method string getUploadURLs()
 * @method $this withUploadURLs($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetURLUploadInfos extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}

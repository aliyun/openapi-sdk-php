<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getImageURLs()
 * @method $this withImageURLs($value)
 * @method string getVideoId()
 * @method $this withVideoId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDeleteImageType()
 * @method $this withDeleteImageType($value)
 * @method string getImageIds()
 * @method $this withImageIds($value)
 */
class DeleteImage extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}

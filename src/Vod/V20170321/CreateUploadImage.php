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
 * @method string getImageExt()
 * @method $this withImageExt($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getOriginalFileName()
 * @method $this withOriginalFileName($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateUploadImage extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}

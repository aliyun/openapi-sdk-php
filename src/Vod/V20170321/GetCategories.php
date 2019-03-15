<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCateId()
 * @method $this withCateId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetCategories extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}

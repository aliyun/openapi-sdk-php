<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMatch()
 * @method $this withMatch($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScrollToken()
 * @method $this withScrollToken($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSearchType()
 * @method $this withSearchType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getResultTypes()
 * @method $this withResultTypes($value)
 * @method string getFields()
 * @method $this withFields($value)
 */
class SearchMedia extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}

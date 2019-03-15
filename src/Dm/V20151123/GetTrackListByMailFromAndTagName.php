<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOffsetCreateTimeDesc()
 * @method $this withOffsetCreateTimeDesc($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getOffsetCreateTime()
 * @method $this withOffsetCreateTime($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetTrackListByMailFromAndTagName extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}

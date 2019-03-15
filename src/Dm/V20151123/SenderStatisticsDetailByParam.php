<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getToAddress()
 * @method $this withToAddress($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getNextStart()
 * @method $this withNextStart($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SenderStatisticsDetailByParam extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}

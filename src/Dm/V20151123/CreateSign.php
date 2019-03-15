<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSignName()
 * @method $this withSignName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFileNames()
 * @method $this withFileNames($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getFromType()
 * @method $this withFromType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateSign extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}

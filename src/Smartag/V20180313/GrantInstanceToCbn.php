<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenUid()
 * @method $this withCenUid($value)
 * @method string getCenInstanceId()
 * @method $this withCenInstanceId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCcnInstanceId()
 * @method $this withCcnInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GrantInstanceToCbn extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';
}

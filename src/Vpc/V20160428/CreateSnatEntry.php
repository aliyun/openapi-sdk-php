<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceVSwitchId()
 * @method $this withSourceVSwitchId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSnatEntryName()
 * @method $this withSnatEntryName($value)
 * @method string getSourceCIDR()
 * @method $this withSourceCIDR($value)
 * @method string getSnatTableId()
 * @method $this withSnatTableId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSnatIp()
 * @method $this withSnatIp($value)
 */
class CreateSnatEntry extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}

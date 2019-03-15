<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeerAsn()
 * @method $this withPeerAsn($value)
 * @method string getIsFakeAsn()
 * @method $this withIsFakeAsn($value)
 * @method string getRouterId()
 * @method $this withRouterId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateBgpGroup extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}

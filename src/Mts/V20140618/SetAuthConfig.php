<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * @method string getKey1()
 * @method $this withKey1($value)
 * @method string getKey2()
 * @method $this withKey2($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetAuthConfig extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';
}

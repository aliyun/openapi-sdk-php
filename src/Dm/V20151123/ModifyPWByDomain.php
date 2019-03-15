<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class ModifyPWByDomain extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}

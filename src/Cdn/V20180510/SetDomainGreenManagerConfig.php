<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetDomainGreenManagerConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}

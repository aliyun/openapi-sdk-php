<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Rpc;

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class CreateGroup extends Rpc
{
    public $product = 'LinkFace';

    public $version = '2018-07-20';

    public $scheme = 'https';

    public $method = 'POST';
}

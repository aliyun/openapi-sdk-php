<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getNewGroupName()
 * @method $this withNewGroupName($value)
 * @method string getNewComments()
 * @method $this withNewComments($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class UpdateGroup extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}

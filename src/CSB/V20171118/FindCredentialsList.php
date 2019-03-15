<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class FindCredentialsList extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';
}

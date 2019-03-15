<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class FindProjectList extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';
}

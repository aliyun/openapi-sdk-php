<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getSearchTxt()
 * @method $this withSearchTxt($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class FindInstanceList extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';
}

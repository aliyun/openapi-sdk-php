<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStartDay()
 * @method $this withStartDay($value)
 * @method string getEndDay()
 * @method $this withEndDay($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetAgentData extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}

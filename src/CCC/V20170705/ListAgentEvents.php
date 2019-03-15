<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getEvent()
 * @method $this withEvent($value)
 * @method string getRamId()
 * @method $this withRamId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAgentEvents extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}

<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListRecordings extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}

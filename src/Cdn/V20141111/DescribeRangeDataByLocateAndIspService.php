<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getIspNames()
 * @method $this withIspNames($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getLocationNames()
 * @method $this withLocationNames($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRangeDataByLocateAndIspService extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['startTime'] = $startTime;

        return $this;
    }
}

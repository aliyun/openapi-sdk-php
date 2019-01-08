<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListCallMeasureSummaryReports
 *
 * @method string getIntervalType()
 */
class ListCallMeasureSummaryReports extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'ListCallMeasureSummaryReports';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $intervalType
     *
     * @return $this
     */
    public function withIntervalType($intervalType)
    {
        $this->data['IntervalType'] = $intervalType;
        $this->options['query']['IntervalType'] = $intervalType;

        return $this;
    }
}

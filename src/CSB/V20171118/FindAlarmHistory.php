<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FindAlarmHistory
 *
 * @method string getCsbId()
 * @method string getTimeWindow()
 */
class FindAlarmHistory extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'FindAlarmHistory';

    /**
     * @param string $csbId
     *
     * @return $this
     */
    public function withCsbId($csbId)
    {
        $this->data['CsbId'] = $csbId;
        $this->options['query']['CsbId'] = $csbId;

        return $this;
    }

    /**
     * @param string $timeWindow
     *
     * @return $this
     */
    public function withTimeWindow($timeWindow)
    {
        $this->data['TimeWindow'] = $timeWindow;
        $this->options['query']['TimeWindow'] = $timeWindow;

        return $this;
    }
}

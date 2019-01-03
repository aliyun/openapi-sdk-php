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
     * @deprecated deprecated since version 2.0, Use withCsbId() instead.
     *
     * @param string $csbId
     *
     * @return $this
     */
    public function setCsbId($csbId)
    {
        return $this->withCsbId($csbId);
    }

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
     * @deprecated deprecated since version 2.0, Use withTimeWindow() instead.
     *
     * @param string $timeWindow
     *
     * @return $this
     */
    public function setTimeWindow($timeWindow)
    {
        return $this->withTimeWindow($timeWindow);
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

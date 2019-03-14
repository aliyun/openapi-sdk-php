<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api FindAlarmHistory
 *
 * @method string getCsbId()
 * @method string getTimeWindow()
 */
class FindAlarmHistory extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

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

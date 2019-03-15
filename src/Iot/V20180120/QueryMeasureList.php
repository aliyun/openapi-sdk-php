<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getStartDay()
 * @method string getSustainDays()
 */
class QueryMeasureList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'QueryMeasureList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $startDay
     *
     * @return $this
     */
    public function withStartDay($startDay)
    {
        $this->data['StartDay']             = $startDay;
        $this->options['query']['StartDay'] = $startDay;

        return $this;
    }

    /**
     * @param string $sustainDays
     *
     * @return $this
     */
    public function withSustainDays($sustainDays)
    {
        $this->data['SustainDays']             = $sustainDays;
        $this->options['query']['SustainDays'] = $sustainDays;

        return $this;
    }
}

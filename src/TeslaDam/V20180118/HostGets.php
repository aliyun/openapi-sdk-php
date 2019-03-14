<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\Rpc;

/**
 * Api HostGets
 *
 * @method string getQuery()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getQueryType()
 */
class HostGets extends Rpc
{
    public $product = 'TeslaDam';

    public $version = '2018-01-18';

    /**
     * @param string $query
     *
     * @return $this
     */
    public function withQuery($query)
    {
        $this->data['Query'] = $query;
        $this->options['query']['Query'] = $query;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $queryType
     *
     * @return $this
     */
    public function withQueryType($queryType)
    {
        $this->data['QueryType'] = $queryType;
        $this->options['query']['QueryType'] = $queryType;

        return $this;
    }
}

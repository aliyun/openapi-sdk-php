<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of HostGets
 *
 * @method string getQuery()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getQueryType()
 */
class HostGets extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'TeslaDam';

    /**
     * @var string
     */
    public $version = '2018-01-18';

    /**
     * @var string
     */
    public $action = 'HostGets';

    /**
     * @deprecated deprecated since version 2.0, Use withQuery() instead.
     *
     * @param string $query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        return $this->withQuery($query);
    }

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
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
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
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
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
     * @deprecated deprecated since version 2.0, Use withQueryType() instead.
     *
     * @param string $queryType
     *
     * @return $this
     */
    public function setQueryType($queryType)
    {
        return $this->withQueryType($queryType);
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

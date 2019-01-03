<?php

namespace AlibabaCloud\Skyeye\V20171201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetCdnSkyeyeStatusData
 *
 * @method string getNode()
 * @method string getDomain()
 * @method string getEndTime()
 * @method string getGroupBy()
 * @method string getStartTime()
 * @method string getFields()
 */
class GetCdnSkyeyeStatusData extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Skyeye';

    /**
     * @var string
     */
    public $version = '2017-12-01';

    /**
     * @var string
     */
    public $action = 'GetCdnSkyeyeStatusData';

    /**
     * @deprecated deprecated since version 2.0, Use withNode() instead.
     *
     * @param string $node
     *
     * @return $this
     */
    public function setNode($node)
    {
        return $this->withNode($node);
    }

    /**
     * @param string $node
     *
     * @return $this
     */
    public function withNode($node)
    {
        $this->data['Node'] = $node;
        $this->options['query']['Node'] = $node;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomain() instead.
     *
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        return $this->withDomain($domain);
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function withDomain($domain)
    {
        $this->data['Domain'] = $domain;
        $this->options['query']['Domain'] = $domain;

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
     * @deprecated deprecated since version 2.0, Use withGroupBy() instead.
     *
     * @param string $groupBy
     *
     * @return $this
     */
    public function setGroupBy($groupBy)
    {
        return $this->withGroupBy($groupBy);
    }

    /**
     * @param string $groupBy
     *
     * @return $this
     */
    public function withGroupBy($groupBy)
    {
        $this->data['GroupBy'] = $groupBy;
        $this->options['query']['GroupBy'] = $groupBy;

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
     * @deprecated deprecated since version 2.0, Use withFields() instead.
     *
     * @param string $fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        return $this->withFields($fields);
    }

    /**
     * @param string $fields
     *
     * @return $this
     */
    public function withFields($fields)
    {
        $this->data['Fields'] = $fields;
        $this->options['query']['Fields'] = $fields;

        return $this;
    }
}

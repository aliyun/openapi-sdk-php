<?php

namespace AlibabaCloud\Skyeye\V20171201;

use AlibabaCloud\Rpc;

/**
 * Api GetCdnSkyeyeStatusData
 *
 * @method string getNode()
 * @method string getDomain()
 * @method string getEndTime()
 * @method string getGroupBy()
 * @method string getStartTime()
 * @method string getFields()
 */
class GetCdnSkyeyeStatusData extends Rpc
{
    public $product = 'Skyeye';

    public $version = '2017-12-01';

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

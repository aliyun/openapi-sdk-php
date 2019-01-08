<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeDomainTopReferVisit
 *
 * @method string getDomainName()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getSortBy()
 */
class DescribeDomainTopReferVisit extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'DescribeDomainTopReferVisit';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

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
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $sortBy
     *
     * @return $this
     */
    public function withSortBy($sortBy)
    {
        $this->data['SortBy'] = $sortBy;
        $this->options['query']['SortBy'] = $sortBy;

        return $this;
    }
}

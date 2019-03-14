<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDomains
 *
 * @method string getAccountId()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class DescribeDomains extends Rpc
{
    public $product = 'Httpdns';

    public $version = '2016-02-01';

    public $method = 'POST';

    /**
     * @param string $accountId
     *
     * @return $this
     */
    public function withAccountId($accountId)
    {
        $this->data['AccountId'] = $accountId;
        $this->options['query']['AccountId'] = $accountId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }
}

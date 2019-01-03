<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListDomains
 *
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class ListDomains extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Httpdns';

    /**
     * @var string
     */
    public $version = '2016-02-01';

    /**
     * @var string
     */
    public $action = 'ListDomains';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
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

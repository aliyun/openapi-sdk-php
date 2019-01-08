<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeAccessGroups
 *
 * @method string getPageSize()
 * @method string getAccessGroupName()
 * @method string getPageNumber()
 */
class DescribeAccessGroups extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'NAS';

    /**
     * @var string
     */
    public $version = '2017-06-26';

    /**
     * @var string
     */
    public $action = 'DescribeAccessGroups';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

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
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function withAccessGroupName($accessGroupName)
    {
        $this->data['AccessGroupName'] = $accessGroupName;
        $this->options['query']['AccessGroupName'] = $accessGroupName;

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

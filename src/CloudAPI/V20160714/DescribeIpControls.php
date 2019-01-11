<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeIpControls
 *
 * @method string getIpControlId()
 * @method string getSecurityToken()
 * @method string getIpControlName()
 * @method string getIpControlType()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class DescribeIpControls extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'DescribeIpControls';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $ipControlId
     *
     * @return $this
     */
    public function withIpControlId($ipControlId)
    {
        $this->data['IpControlId'] = $ipControlId;
        $this->options['query']['IpControlId'] = $ipControlId;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $ipControlName
     *
     * @return $this
     */
    public function withIpControlName($ipControlName)
    {
        $this->data['IpControlName'] = $ipControlName;
        $this->options['query']['IpControlName'] = $ipControlName;

        return $this;
    }

    /**
     * @param string $ipControlType
     *
     * @return $this
     */
    public function withIpControlType($ipControlType)
    {
        $this->data['IpControlType'] = $ipControlType;
        $this->options['query']['IpControlType'] = $ipControlType;

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

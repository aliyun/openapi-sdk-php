<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribePurchasedApis
 *
 * @method string getStageName()
 * @method string getApiName()
 * @method string getVisibility()
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getPageSize()
 * @method string getApiId()
 * @method string getPageNumber()
 */
class DescribePurchasedApis extends RpcRequest
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
    public $action = 'DescribePurchasedApis';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $stageName
     *
     * @return $this
     */
    public function withStageName($stageName)
    {
        $this->data['StageName'] = $stageName;
        $this->options['query']['StageName'] = $stageName;

        return $this;
    }

    /**
     * @param string $apiName
     *
     * @return $this
     */
    public function withApiName($apiName)
    {
        $this->data['ApiName'] = $apiName;
        $this->options['query']['ApiName'] = $apiName;

        return $this;
    }

    /**
     * @param string $visibility
     *
     * @return $this
     */
    public function withVisibility($visibility)
    {
        $this->data['Visibility'] = $visibility;
        $this->options['query']['Visibility'] = $visibility;

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
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

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
     * @param string $apiId
     *
     * @return $this
     */
    public function withApiId($apiId)
    {
        $this->data['ApiId'] = $apiId;
        $this->options['query']['ApiId'] = $apiId;

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

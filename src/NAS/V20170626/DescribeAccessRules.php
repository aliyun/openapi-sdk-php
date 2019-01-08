<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeAccessRules
 *
 * @method string getPageSize()
 * @method string getAccessGroupName()
 * @method string getAccessRuleId()
 * @method string getPageNumber()
 */
class DescribeAccessRules extends RpcRequest
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
    public $action = 'DescribeAccessRules';

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
     * @param string $accessRuleId
     *
     * @return $this
     */
    public function withAccessRuleId($accessRuleId)
    {
        $this->data['AccessRuleId'] = $accessRuleId;
        $this->options['query']['AccessRuleId'] = $accessRuleId;

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

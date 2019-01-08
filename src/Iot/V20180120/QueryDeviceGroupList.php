<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryDeviceGroupList
 *
 * @method string getSuperGroupId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getGroupName()
 */
class QueryDeviceGroupList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'QueryDeviceGroupList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $superGroupId
     *
     * @return $this
     */
    public function withSuperGroupId($superGroupId)
    {
        $this->data['SuperGroupId'] = $superGroupId;
        $this->options['query']['SuperGroupId'] = $superGroupId;

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
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['GroupName'] = $groupName;

        return $this;
    }
}

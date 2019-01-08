<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListMyGroups
 *
 * @method string getSelectContactGroups()
 * @method string getInstanceId()
 * @method string getPageSize()
 * @method string getKeyword()
 * @method string getType()
 * @method string getGroupName()
 * @method string getPageNumber()
 * @method string getBindUrls()
 */
class ListMyGroups extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'ListMyGroups';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $selectContactGroups
     *
     * @return $this
     */
    public function withSelectContactGroups($selectContactGroups)
    {
        $this->data['SelectContactGroups'] = $selectContactGroups;
        $this->options['query']['SelectContactGroups'] = $selectContactGroups;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

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
     * @param string $keyword
     *
     * @return $this
     */
    public function withKeyword($keyword)
    {
        $this->data['Keyword'] = $keyword;
        $this->options['query']['Keyword'] = $keyword;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

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

    /**
     * @param string $bindUrls
     *
     * @return $this
     */
    public function withBindUrls($bindUrls)
    {
        $this->data['BindUrls'] = $bindUrls;
        $this->options['query']['BindUrls'] = $bindUrls;

        return $this;
    }
}

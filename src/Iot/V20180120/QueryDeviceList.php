<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method array getProductKeyList()
 * @method string getDeviceName()
 * @method string getCurrentPage()
 * @method string getPageSize()
 */
class QueryDeviceList extends RpcRequest
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
    public $action = 'QueryDeviceList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @return array
     * @deprecated deprecated since version 2.0, Use getProductKeyList() instead.
     *
     */
    public function getProductKeyLists()
    {
        return $this->getProductKeyList();
    }

    /**
     * @param array $productKeyLists
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withProductKeyList() instead.
     *
     */
    public function setProductKeyLists(array $productKeyLists)
    {
        return $this->withProductKeyList($productKeyLists);
    }

    /**
     * @param array $productKeyList
     *
     * @return $this
     */
    public function withProductKeyList(array $productKeyList)
    {
        $this->data['ProductKeyList'] = $productKeyList;
        foreach ($productKeyList as $i => $iValue) {
            $this->options['query']['ProductKeyList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function withDeviceName($deviceName)
    {
        $this->data['DeviceName']             = $deviceName;
        $this->options['query']['DeviceName'] = $deviceName;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage']             = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize']             = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribePlayTopVideos
 *
 * @method string getBizDate()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getOwnerId()
 */
class DescribePlayTopVideos extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'DescribePlayTopVideos';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @param string $bizDate
     *
     * @return $this
     */
    public function withBizDate($bizDate)
    {
        $this->data['BizDate'] = $bizDate;
        $this->options['query']['BizDate'] = $bizDate;

        return $this;
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function withPageNo($pageNo)
    {
        $this->data['PageNo'] = $pageNo;
        $this->options['query']['PageNo'] = $pageNo;

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
}

<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryBizItems
 *
 * @method string getBizId()
 * @method string getSubBizId()
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method string getUserId()
 */
class QueryBizItems extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'linkedmall';

    /**
     * @var string
     */
    public $version = '2018-01-16';

    /**
     * @var string
     */
    public $action = 'QueryBizItems';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'linkedmall';

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function withBizId($bizId)
    {
        $this->data['BizId'] = $bizId;
        $this->options['query']['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $subBizId
     *
     * @return $this
     */
    public function withSubBizId($subBizId)
    {
        $this->data['SubBizId'] = $subBizId;
        $this->options['query']['SubBizId'] = $subBizId;

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

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }
}

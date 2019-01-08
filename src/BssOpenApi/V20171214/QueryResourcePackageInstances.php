<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryResourcePackageInstances
 *
 * @method string getExpiryTimeEnd()
 * @method string getProductCode()
 * @method string getPageSize()
 * @method string getOwnerId()
 * @method string getExpiryTimeStart()
 * @method string getPageNum()
 */
class QueryResourcePackageInstances extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'BssOpenApi';

    /**
     * @var string
     */
    public $version = '2017-12-14';

    /**
     * @var string
     */
    public $action = 'QueryResourcePackageInstances';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $expiryTimeEnd
     *
     * @return $this
     */
    public function withExpiryTimeEnd($expiryTimeEnd)
    {
        $this->data['ExpiryTimeEnd'] = $expiryTimeEnd;
        $this->options['query']['ExpiryTimeEnd'] = $expiryTimeEnd;

        return $this;
    }

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function withProductCode($productCode)
    {
        $this->data['ProductCode'] = $productCode;
        $this->options['query']['ProductCode'] = $productCode;

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

    /**
     * @param string $expiryTimeStart
     *
     * @return $this
     */
    public function withExpiryTimeStart($expiryTimeStart)
    {
        $this->data['ExpiryTimeStart'] = $expiryTimeStart;
        $this->options['query']['ExpiryTimeStart'] = $expiryTimeStart;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }
}

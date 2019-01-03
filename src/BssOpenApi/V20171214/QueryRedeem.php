<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryRedeem
 *
 * @method string getExpiryTimeEnd()
 * @method string getPageSize()
 * @method string getExpiryTimeStart()
 * @method string getPageNum()
 * @method string getEffectiveOrNot()
 */
class QueryRedeem extends RpcRequest
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
    public $action = 'QueryRedeem';

    /**
     * @deprecated deprecated since version 2.0, Use withExpiryTimeEnd() instead.
     *
     * @param string $expiryTimeEnd
     *
     * @return $this
     */
    public function setExpiryTimeEnd($expiryTimeEnd)
    {
        return $this->withExpiryTimeEnd($expiryTimeEnd);
    }

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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withExpiryTimeStart() instead.
     *
     * @param string $expiryTimeStart
     *
     * @return $this
     */
    public function setExpiryTimeStart($expiryTimeStart)
    {
        return $this->withExpiryTimeStart($expiryTimeStart);
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
     * @deprecated deprecated since version 2.0, Use withPageNum() instead.
     *
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        return $this->withPageNum($pageNum);
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

    /**
     * @deprecated deprecated since version 2.0, Use withEffectiveOrNot() instead.
     *
     * @param string $effectiveOrNot
     *
     * @return $this
     */
    public function setEffectiveOrNot($effectiveOrNot)
    {
        return $this->withEffectiveOrNot($effectiveOrNot);
    }

    /**
     * @param string $effectiveOrNot
     *
     * @return $this
     */
    public function withEffectiveOrNot($effectiveOrNot)
    {
        $this->data['EffectiveOrNot'] = $effectiveOrNot;
        $this->options['query']['EffectiveOrNot'] = $effectiveOrNot;

        return $this;
    }
}

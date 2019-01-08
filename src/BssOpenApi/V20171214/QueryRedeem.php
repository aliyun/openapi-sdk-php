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

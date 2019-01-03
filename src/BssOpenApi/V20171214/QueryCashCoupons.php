<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryCashCoupons
 *
 * @method string getExpiryTimeEnd()
 * @method string getExpiryTimeStart()
 * @method string getEffectiveOrNot()
 */
class QueryCashCoupons extends RpcRequest
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
    public $action = 'QueryCashCoupons';

    /**
     * @var string
     */
    public $method = 'POST';

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

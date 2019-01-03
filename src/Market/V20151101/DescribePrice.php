<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribePrice
 *
 * @method string getCommodity()
 * @method string getOrderType()
 */
class DescribePrice extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Market';

    /**
     * @var string
     */
    public $version = '2015-11-01';

    /**
     * @var string
     */
    public $action = 'DescribePrice';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCommodity() instead.
     *
     * @param string $commodity
     *
     * @return $this
     */
    public function setCommodity($commodity)
    {
        return $this->withCommodity($commodity);
    }

    /**
     * @param string $commodity
     *
     * @return $this
     */
    public function withCommodity($commodity)
    {
        $this->data['Commodity'] = $commodity;
        $this->options['query']['Commodity'] = $commodity;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderType() instead.
     *
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        return $this->withOrderType($orderType);
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function withOrderType($orderType)
    {
        $this->data['OrderType'] = $orderType;
        $this->options['query']['OrderType'] = $orderType;

        return $this;
    }
}

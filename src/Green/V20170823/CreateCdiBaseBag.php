<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateCdiBaseBag
 *
 * @method string getDuration()
 * @method string getClientToken()
 * @method string getCommodityCode()
 * @method string getOwnerId()
 * @method string getFlowOutSpec()
 * @method string getOrderType()
 */
class CreateCdiBaseBag extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'CreateCdiBaseBag';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @param string $duration
     *
     * @return $this
     */
    public function withDuration($duration)
    {
        $this->data['Duration'] = $duration;
        $this->options['query']['Duration'] = $duration;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $commodityCode
     *
     * @return $this
     */
    public function withCommodityCode($commodityCode)
    {
        $this->data['CommodityCode'] = $commodityCode;
        $this->options['query']['CommodityCode'] = $commodityCode;

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
     * @param string $flowOutSpec
     *
     * @return $this
     */
    public function withFlowOutSpec($flowOutSpec)
    {
        $this->data['FlowOutSpec'] = $flowOutSpec;
        $this->options['query']['FlowOutSpec'] = $flowOutSpec;

        return $this;
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

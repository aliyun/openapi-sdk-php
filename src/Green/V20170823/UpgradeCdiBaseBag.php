<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api UpgradeCdiBaseBag
 *
 * @method string getInstanceId()
 * @method string getClientToken()
 * @method string getCommodityCode()
 * @method string getOwnerId()
 * @method string getFlowOutSpec()
 * @method string getOrderType()
 */
class UpgradeCdiBaseBag extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

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

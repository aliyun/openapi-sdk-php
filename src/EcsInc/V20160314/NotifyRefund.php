<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of NotifyRefund
 *
 * @method string getRefundExtendParams()
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 * @method string getRefundType()
 * @method string getResourceOwnerAccount()
 * @method string getOrderId()
 * @method string getOwnerAccount()
 * @method array getOrderIds()
 * @method string getOwnerId()
 * @method string getResourceType()
 */
class NotifyRefund extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'NotifyRefund';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @param string $refundExtendParams
     *
     * @return $this
     */
    public function withRefundExtendParams($refundExtendParams)
    {
        $this->data['RefundExtendParams'] = $refundExtendParams;
        $this->options['query']['RefundExtendParams'] = $refundExtendParams;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

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
     * @param string $refundType
     *
     * @return $this
     */
    public function withRefundType($refundType)
    {
        $this->data['RefundType'] = $refundType;
        $this->options['query']['RefundType'] = $refundType;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function withOrderId($orderId)
    {
        $this->data['OrderId'] = $orderId;
        $this->options['query']['OrderId'] = $orderId;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param array $orderIds
     *
     * @return $this
     */
    public function withOrderIds(array $orderIds)
    {
        $this->data['OrderIds'] = $orderIds;
        foreach ($orderIds as $i => $iValue) {
            $this->options['query']['OrderIds.' . ($i + 1)] = $iValue;
        }

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function withResourceType($resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        $this->options['query']['ResourceType'] = $resourceType;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyEipPayType
 *
 * @method string getPeriod()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getUsedTime()
 * @method string getKbpsBandwidth()
 * @method string getInstanceId()
 * @method string getResourceUid()
 * @method string getResourceBid()
 * @method string getPayType()
 */
class ModifyEipPayType extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'ModifyEipPayType';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

    /**
     * @deprecated deprecated since version 2.0, Use withPeriod() instead.
     *
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        return $this->withPeriod($period);
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withBandwidth() instead.
     *
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        return $this->withBandwidth($bandwidth);
    }

    /**
     * @param string $bandwidth
     *
     * @return $this
     */
    public function withBandwidth($bandwidth)
    {
        $this->data['Bandwidth'] = $bandwidth;
        $this->options['query']['Bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withUsedTime() instead.
     *
     * @param string $usedTime
     *
     * @return $this
     */
    public function setUsedTime($usedTime)
    {
        return $this->withUsedTime($usedTime);
    }

    /**
     * @param string $usedTime
     *
     * @return $this
     */
    public function withUsedTime($usedTime)
    {
        $this->data['UsedTime'] = $usedTime;
        $this->options['query']['UsedTime'] = $usedTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withKbpsBandwidth() instead.
     *
     * @param string $kbpsBandwidth
     *
     * @return $this
     */
    public function setKbpsBandwidth($kbpsBandwidth)
    {
        return $this->withKbpsBandwidth($kbpsBandwidth);
    }

    /**
     * @param string $kbpsBandwidth
     *
     * @return $this
     */
    public function withKbpsBandwidth($kbpsBandwidth)
    {
        $this->data['KbpsBandwidth'] = $kbpsBandwidth;
        $this->options['query']['KbpsBandwidth'] = $kbpsBandwidth;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
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
     * @deprecated deprecated since version 2.0, Use withResourceUid() instead.
     *
     * @param string $resourceUid
     *
     * @return $this
     */
    public function setResourceUid($resourceUid)
    {
        return $this->withResourceUid($resourceUid);
    }

    /**
     * @param string $resourceUid
     *
     * @return $this
     */
    public function withResourceUid($resourceUid)
    {
        $this->data['ResourceUid'] = $resourceUid;
        $this->options['query']['ResourceUid'] = $resourceUid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceBid() instead.
     *
     * @param string $resourceBid
     *
     * @return $this
     */
    public function setResourceBid($resourceBid)
    {
        return $this->withResourceBid($resourceBid);
    }

    /**
     * @param string $resourceBid
     *
     * @return $this
     */
    public function withResourceBid($resourceBid)
    {
        $this->data['ResourceBid'] = $resourceBid;
        $this->options['query']['ResourceBid'] = $resourceBid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPayType() instead.
     *
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        return $this->withPayType($payType);
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function withPayType($payType)
    {
        $this->data['PayType'] = $payType;
        $this->options['query']['PayType'] = $payType;

        return $this;
    }
}

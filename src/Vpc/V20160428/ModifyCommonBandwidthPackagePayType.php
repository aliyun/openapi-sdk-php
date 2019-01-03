<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyCommonBandwidthPackagePayType
 *
 * @method string getResourceOwnerId()
 * @method string getBandwidthPackageId()
 * @method string getAutoPay()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getDuration()
 * @method string getKbpsBandwidth()
 * @method string getResourceUid()
 * @method string getResourceBid()
 * @method string getPayType()
 * @method string getPricingCycle()
 */
class ModifyCommonBandwidthPackagePayType extends RpcRequest
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
    public $action = 'ModifyCommonBandwidthPackagePayType';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

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
     * @deprecated deprecated since version 2.0, Use withBandwidthPackageId() instead.
     *
     * @param string $bandwidthPackageId
     *
     * @return $this
     */
    public function setBandwidthPackageId($bandwidthPackageId)
    {
        return $this->withBandwidthPackageId($bandwidthPackageId);
    }

    /**
     * @param string $bandwidthPackageId
     *
     * @return $this
     */
    public function withBandwidthPackageId($bandwidthPackageId)
    {
        $this->data['BandwidthPackageId'] = $bandwidthPackageId;
        $this->options['query']['BandwidthPackageId'] = $bandwidthPackageId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAutoPay() instead.
     *
     * @param string $autoPay
     *
     * @return $this
     */
    public function setAutoPay($autoPay)
    {
        return $this->withAutoPay($autoPay);
    }

    /**
     * @param string $autoPay
     *
     * @return $this
     */
    public function withAutoPay($autoPay)
    {
        $this->data['AutoPay'] = $autoPay;
        $this->options['query']['AutoPay'] = $autoPay;

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
     * @deprecated deprecated since version 2.0, Use withDuration() instead.
     *
     * @param string $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        return $this->withDuration($duration);
    }

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

    /**
     * @deprecated deprecated since version 2.0, Use withPricingCycle() instead.
     *
     * @param string $pricingCycle
     *
     * @return $this
     */
    public function setPricingCycle($pricingCycle)
    {
        return $this->withPricingCycle($pricingCycle);
    }

    /**
     * @param string $pricingCycle
     *
     * @return $this
     */
    public function withPricingCycle($pricingCycle)
    {
        $this->data['PricingCycle'] = $pricingCycle;
        $this->options['query']['PricingCycle'] = $pricingCycle;

        return $this;
    }
}

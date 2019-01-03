<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateInstance
 *
 * @method string getDuration()
 * @method string getIsAutoRenew()
 * @method string getClientToken()
 * @method string getVmNumber()
 * @method string getOwnerId()
 * @method string getVersionCode()
 * @method string getPricingCycle()
 * @method string getAutoRenewDuration()
 */
class CreateInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'CreateInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

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
     * @deprecated deprecated since version 2.0, Use withIsAutoRenew() instead.
     *
     * @param string $isAutoRenew
     *
     * @return $this
     */
    public function setIsAutoRenew($isAutoRenew)
    {
        return $this->withIsAutoRenew($isAutoRenew);
    }

    /**
     * @param string $isAutoRenew
     *
     * @return $this
     */
    public function withIsAutoRenew($isAutoRenew)
    {
        $this->data['IsAutoRenew'] = $isAutoRenew;
        $this->options['query']['IsAutoRenew'] = $isAutoRenew;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
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
     * @deprecated deprecated since version 2.0, Use withVmNumber() instead.
     *
     * @param string $vmNumber
     *
     * @return $this
     */
    public function setVmNumber($vmNumber)
    {
        return $this->withVmNumber($vmNumber);
    }

    /**
     * @param string $vmNumber
     *
     * @return $this
     */
    public function withVmNumber($vmNumber)
    {
        $this->data['VmNumber'] = $vmNumber;
        $this->options['query']['VmNumber'] = $vmNumber;

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
     * @deprecated deprecated since version 2.0, Use withVersionCode() instead.
     *
     * @param string $versionCode
     *
     * @return $this
     */
    public function setVersionCode($versionCode)
    {
        return $this->withVersionCode($versionCode);
    }

    /**
     * @param string $versionCode
     *
     * @return $this
     */
    public function withVersionCode($versionCode)
    {
        $this->data['VersionCode'] = $versionCode;
        $this->options['query']['VersionCode'] = $versionCode;

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

    /**
     * @deprecated deprecated since version 2.0, Use withAutoRenewDuration() instead.
     *
     * @param string $autoRenewDuration
     *
     * @return $this
     */
    public function setAutoRenewDuration($autoRenewDuration)
    {
        return $this->withAutoRenewDuration($autoRenewDuration);
    }

    /**
     * @param string $autoRenewDuration
     *
     * @return $this
     */
    public function withAutoRenewDuration($autoRenewDuration)
    {
        $this->data['AutoRenewDuration'] = $autoRenewDuration;
        $this->options['query']['AutoRenewDuration'] = $autoRenewDuration;

        return $this;
    }
}

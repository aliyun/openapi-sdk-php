<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api CreateInstance
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
class CreateInstance extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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

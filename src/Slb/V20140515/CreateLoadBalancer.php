<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateLoadBalancer
 *
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getAddressIPVersion()
 * @method string getMasterZoneId()
 * @method string getDuration()
 * @method string getResourceGroupId()
 * @method string getLoadBalancerName()
 * @method string getAddressType()
 * @method string getSlaveZoneId()
 * @method string getLoadBalancerSpec()
 * @method string getAutoPay()
 * @method string getAddress()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTags()
 * @method string getVSwitchId()
 * @method string getEnableVpcVipFlow()
 * @method string getInternetChargeType()
 * @method string getVpcId()
 * @method string getPayType()
 * @method string getPricingCycle()
 * @method string getRatio()
 */
class CreateLoadBalancer extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Slb';

    /**
     * @var string
     */
    public $version = '2014-05-15';

    /**
     * @var string
     */
    public $action = 'CreateLoadBalancer';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'slb';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

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
     * @param string $addressIPVersion
     *
     * @return $this
     */
    public function withAddressIPVersion($addressIPVersion)
    {
        $this->data['AddressIPVersion'] = $addressIPVersion;
        $this->options['query']['AddressIPVersion'] = $addressIPVersion;

        return $this;
    }

    /**
     * @param string $masterZoneId
     *
     * @return $this
     */
    public function withMasterZoneId($masterZoneId)
    {
        $this->data['MasterZoneId'] = $masterZoneId;
        $this->options['query']['MasterZoneId'] = $masterZoneId;

        return $this;
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
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId'] = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $loadBalancerName
     *
     * @return $this
     */
    public function withLoadBalancerName($loadBalancerName)
    {
        $this->data['LoadBalancerName'] = $loadBalancerName;
        $this->options['query']['LoadBalancerName'] = $loadBalancerName;

        return $this;
    }

    /**
     * @param string $addressType
     *
     * @return $this
     */
    public function withAddressType($addressType)
    {
        $this->data['AddressType'] = $addressType;
        $this->options['query']['AddressType'] = $addressType;

        return $this;
    }

    /**
     * @param string $slaveZoneId
     *
     * @return $this
     */
    public function withSlaveZoneId($slaveZoneId)
    {
        $this->data['SlaveZoneId'] = $slaveZoneId;
        $this->options['query']['SlaveZoneId'] = $slaveZoneId;

        return $this;
    }

    /**
     * @param string $loadBalancerSpec
     *
     * @return $this
     */
    public function withLoadBalancerSpec($loadBalancerSpec)
    {
        $this->data['LoadBalancerSpec'] = $loadBalancerSpec;
        $this->options['query']['LoadBalancerSpec'] = $loadBalancerSpec;

        return $this;
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
     * @param string $address
     *
     * @return $this
     */
    public function withAddress($address)
    {
        $this->data['Address'] = $address;
        $this->options['query']['Address'] = $address;

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
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $enableVpcVipFlow
     *
     * @return $this
     */
    public function withEnableVpcVipFlow($enableVpcVipFlow)
    {
        $this->data['EnableVpcVipFlow'] = $enableVpcVipFlow;
        $this->options['query']['EnableVpcVipFlow'] = $enableVpcVipFlow;

        return $this;
    }

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function withInternetChargeType($internetChargeType)
    {
        $this->data['InternetChargeType'] = $internetChargeType;
        $this->options['query']['InternetChargeType'] = $internetChargeType;

        return $this;
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function withVpcId($vpcId)
    {
        $this->data['VpcId'] = $vpcId;
        $this->options['query']['VpcId'] = $vpcId;

        return $this;
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
     * @param string $ratio
     *
     * @return $this
     */
    public function withRatio($ratio)
    {
        $this->data['Ratio'] = $ratio;
        $this->options['query']['Ratio'] = $ratio;

        return $this;
    }
}

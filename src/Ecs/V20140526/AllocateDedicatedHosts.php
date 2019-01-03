<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AllocateDedicatedHosts
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getResourceGroupId()
 * @method string getActionOnMaintenance()
 * @method array getTag()
 * @method string getDedicatedHostType()
 * @method string getAutoRenewPeriod()
 * @method string getPeriod()
 * @method string getQuantity()
 * @method string getDedicatedHostName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getAutoReleaseTime()
 * @method string getOwnerId()
 * @method string getPeriodUnit()
 * @method string getAutoRenew()
 * @method string getNetworkAttributesSlbUdpTimeout()
 * @method string getZoneId()
 * @method string getChargeType()
 * @method string getNetworkAttributesUdpTimeout()
 */
class AllocateDedicatedHosts extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'AllocateDedicatedHosts';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceGroupId() instead.
     *
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        return $this->withResourceGroupId($resourceGroupId);
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
     * @deprecated deprecated since version 2.0, Use withActionOnMaintenance() instead.
     *
     * @param string $actionOnMaintenance
     *
     * @return $this
     */
    public function setActionOnMaintenance($actionOnMaintenance)
    {
        return $this->withActionOnMaintenance($actionOnMaintenance);
    }

    /**
     * @param string $actionOnMaintenance
     *
     * @return $this
     */
    public function withActionOnMaintenance($actionOnMaintenance)
    {
        $this->data['ActionOnMaintenance'] = $actionOnMaintenance;
        $this->options['query']['ActionOnMaintenance'] = $actionOnMaintenance;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getTag() instead.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->getTag();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        return $this->withTag($tags);
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDedicatedHostType() instead.
     *
     * @param string $dedicatedHostType
     *
     * @return $this
     */
    public function setDedicatedHostType($dedicatedHostType)
    {
        return $this->withDedicatedHostType($dedicatedHostType);
    }

    /**
     * @param string $dedicatedHostType
     *
     * @return $this
     */
    public function withDedicatedHostType($dedicatedHostType)
    {
        $this->data['DedicatedHostType'] = $dedicatedHostType;
        $this->options['query']['DedicatedHostType'] = $dedicatedHostType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAutoRenewPeriod() instead.
     *
     * @param string $autoRenewPeriod
     *
     * @return $this
     */
    public function setAutoRenewPeriod($autoRenewPeriod)
    {
        return $this->withAutoRenewPeriod($autoRenewPeriod);
    }

    /**
     * @param string $autoRenewPeriod
     *
     * @return $this
     */
    public function withAutoRenewPeriod($autoRenewPeriod)
    {
        $this->data['AutoRenewPeriod'] = $autoRenewPeriod;
        $this->options['query']['AutoRenewPeriod'] = $autoRenewPeriod;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withQuantity() instead.
     *
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        return $this->withQuantity($quantity);
    }

    /**
     * @param string $quantity
     *
     * @return $this
     */
    public function withQuantity($quantity)
    {
        $this->data['Quantity'] = $quantity;
        $this->options['query']['Quantity'] = $quantity;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDedicatedHostName() instead.
     *
     * @param string $dedicatedHostName
     *
     * @return $this
     */
    public function setDedicatedHostName($dedicatedHostName)
    {
        return $this->withDedicatedHostName($dedicatedHostName);
    }

    /**
     * @param string $dedicatedHostName
     *
     * @return $this
     */
    public function withDedicatedHostName($dedicatedHostName)
    {
        $this->data['DedicatedHostName'] = $dedicatedHostName;
        $this->options['query']['DedicatedHostName'] = $dedicatedHostName;

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
     * @deprecated deprecated since version 2.0, Use withAutoReleaseTime() instead.
     *
     * @param string $autoReleaseTime
     *
     * @return $this
     */
    public function setAutoReleaseTime($autoReleaseTime)
    {
        return $this->withAutoReleaseTime($autoReleaseTime);
    }

    /**
     * @param string $autoReleaseTime
     *
     * @return $this
     */
    public function withAutoReleaseTime($autoReleaseTime)
    {
        $this->data['AutoReleaseTime'] = $autoReleaseTime;
        $this->options['query']['AutoReleaseTime'] = $autoReleaseTime;

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
     * @deprecated deprecated since version 2.0, Use withPeriodUnit() instead.
     *
     * @param string $periodUnit
     *
     * @return $this
     */
    public function setPeriodUnit($periodUnit)
    {
        return $this->withPeriodUnit($periodUnit);
    }

    /**
     * @param string $periodUnit
     *
     * @return $this
     */
    public function withPeriodUnit($periodUnit)
    {
        $this->data['PeriodUnit'] = $periodUnit;
        $this->options['query']['PeriodUnit'] = $periodUnit;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAutoRenew() instead.
     *
     * @param string $autoRenew
     *
     * @return $this
     */
    public function setAutoRenew($autoRenew)
    {
        return $this->withAutoRenew($autoRenew);
    }

    /**
     * @param string $autoRenew
     *
     * @return $this
     */
    public function withAutoRenew($autoRenew)
    {
        $this->data['AutoRenew'] = $autoRenew;
        $this->options['query']['AutoRenew'] = $autoRenew;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNetworkAttributesSlbUdpTimeout() instead.
     *
     * @param string $networkAttributesSlbUdpTimeout
     *
     * @return $this
     */
    public function setNetworkAttributesSlbUdpTimeout($networkAttributesSlbUdpTimeout)
    {
        return $this->withNetworkAttributesSlbUdpTimeout($networkAttributesSlbUdpTimeout);
    }

    /**
     * @param string $networkAttributesSlbUdpTimeout
     *
     * @return $this
     */
    public function withNetworkAttributesSlbUdpTimeout($networkAttributesSlbUdpTimeout)
    {
        $this->data['NetworkAttributesSlbUdpTimeout'] = $networkAttributesSlbUdpTimeout;
        $this->options['query']['NetworkAttributes.SlbUdpTimeout'] = $networkAttributesSlbUdpTimeout;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withZoneId() instead.
     *
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        return $this->withZoneId($zoneId);
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withChargeType() instead.
     *
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        return $this->withChargeType($chargeType);
    }

    /**
     * @param string $chargeType
     *
     * @return $this
     */
    public function withChargeType($chargeType)
    {
        $this->data['ChargeType'] = $chargeType;
        $this->options['query']['ChargeType'] = $chargeType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNetworkAttributesUdpTimeout() instead.
     *
     * @param string $networkAttributesUdpTimeout
     *
     * @return $this
     */
    public function setNetworkAttributesUdpTimeout($networkAttributesUdpTimeout)
    {
        return $this->withNetworkAttributesUdpTimeout($networkAttributesUdpTimeout);
    }

    /**
     * @param string $networkAttributesUdpTimeout
     *
     * @return $this
     */
    public function withNetworkAttributesUdpTimeout($networkAttributesUdpTimeout)
    {
        $this->data['NetworkAttributesUdpTimeout'] = $networkAttributesUdpTimeout;
        $this->options['query']['NetworkAttributes.UdpTimeout'] = $networkAttributesUdpTimeout;

        return $this;
    }
}

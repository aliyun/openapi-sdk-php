<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDedicatedHostAutoRenewAttribute
 *
 * @method string getDuration()
 * @method string getDedicatedHostIds()
 * @method string getResourceOwnerId()
 * @method string getPeriodUnit()
 * @method string getAutoRenew()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getRenewalStatus()
 * @method string getOwnerId()
 */
class ModifyDedicatedHostAutoRenewAttribute extends RpcRequest
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
    public $action = 'ModifyDedicatedHostAutoRenewAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withDedicatedHostIds() instead.
     *
     * @param string $dedicatedHostIds
     *
     * @return $this
     */
    public function setDedicatedHostIds($dedicatedHostIds)
    {
        return $this->withDedicatedHostIds($dedicatedHostIds);
    }

    /**
     * @param string $dedicatedHostIds
     *
     * @return $this
     */
    public function withDedicatedHostIds($dedicatedHostIds)
    {
        $this->data['DedicatedHostIds'] = $dedicatedHostIds;
        $this->options['query']['DedicatedHostIds'] = $dedicatedHostIds;

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
     * @deprecated deprecated since version 2.0, Use withRenewalStatus() instead.
     *
     * @param string $renewalStatus
     *
     * @return $this
     */
    public function setRenewalStatus($renewalStatus)
    {
        return $this->withRenewalStatus($renewalStatus);
    }

    /**
     * @param string $renewalStatus
     *
     * @return $this
     */
    public function withRenewalStatus($renewalStatus)
    {
        $this->data['RenewalStatus'] = $renewalStatus;
        $this->options['query']['RenewalStatus'] = $renewalStatus;

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
}

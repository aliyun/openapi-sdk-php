<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api ModifyInstanceSpec
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getAllowMigrateAcrossZone()
 * @method string getOwnerAccount()
 * @method string getInternetMaxBandwidthOut()
 * @method string getOwnerId()
 * @method string getTemporaryInternetMaxBandwidthOut()
 * @method string getSystemDiskCategory()
 * @method string getTemporaryStartTime()
 * @method string getAsync()
 * @method string getInstanceId()
 * @method string getInstanceType()
 * @method string getTemporaryEndTime()
 * @method string getInternetMaxBandwidthIn()
 */
class ModifyInstanceSpec extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
     * @param string $allowMigrateAcrossZone
     *
     * @return $this
     */
    public function withAllowMigrateAcrossZone($allowMigrateAcrossZone)
    {
        $this->data['AllowMigrateAcrossZone'] = $allowMigrateAcrossZone;
        $this->options['query']['AllowMigrateAcrossZone'] = $allowMigrateAcrossZone;

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
     * @param string $internetMaxBandwidthOut
     *
     * @return $this
     */
    public function withInternetMaxBandwidthOut($internetMaxBandwidthOut)
    {
        $this->data['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;
        $this->options['query']['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;

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
     * @param string $temporaryInternetMaxBandwidthOut
     *
     * @return $this
     */
    public function withTemporaryInternetMaxBandwidthOut($temporaryInternetMaxBandwidthOut)
    {
        $this->data['TemporaryInternetMaxBandwidthOut'] = $temporaryInternetMaxBandwidthOut;
        $this->options['query']['Temporary.InternetMaxBandwidthOut'] = $temporaryInternetMaxBandwidthOut;

        return $this;
    }

    /**
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function withSystemDiskCategory($systemDiskCategory)
    {
        $this->data['SystemDiskCategory'] = $systemDiskCategory;
        $this->options['query']['SystemDisk.Category'] = $systemDiskCategory;

        return $this;
    }

    /**
     * @param string $temporaryStartTime
     *
     * @return $this
     */
    public function withTemporaryStartTime($temporaryStartTime)
    {
        $this->data['TemporaryStartTime'] = $temporaryStartTime;
        $this->options['query']['Temporary.StartTime'] = $temporaryStartTime;

        return $this;
    }

    /**
     * @param string $async
     *
     * @return $this
     */
    public function withAsync($async)
    {
        $this->data['Async'] = $async;
        $this->options['query']['Async'] = $async;

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
     * @param string $instanceType
     *
     * @return $this
     */
    public function withInstanceType($instanceType)
    {
        $this->data['InstanceType'] = $instanceType;
        $this->options['query']['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $temporaryEndTime
     *
     * @return $this
     */
    public function withTemporaryEndTime($temporaryEndTime)
    {
        $this->data['TemporaryEndTime'] = $temporaryEndTime;
        $this->options['query']['Temporary.EndTime'] = $temporaryEndTime;

        return $this;
    }

    /**
     * @param string $internetMaxBandwidthIn
     *
     * @return $this
     */
    public function withInternetMaxBandwidthIn($internetMaxBandwidthIn)
    {
        $this->data['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;
        $this->options['query']['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;

        return $this;
    }
}

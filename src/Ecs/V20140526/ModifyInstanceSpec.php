<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyInstanceSpec
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
class ModifyInstanceSpec extends RpcRequest
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
    public $action = 'ModifyInstanceSpec';

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
     * @deprecated deprecated since version 2.0, Use withAllowMigrateAcrossZone() instead.
     *
     * @param string $allowMigrateAcrossZone
     *
     * @return $this
     */
    public function setAllowMigrateAcrossZone($allowMigrateAcrossZone)
    {
        return $this->withAllowMigrateAcrossZone($allowMigrateAcrossZone);
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
     * @deprecated deprecated since version 2.0, Use withInternetMaxBandwidthOut() instead.
     *
     * @param string $internetMaxBandwidthOut
     *
     * @return $this
     */
    public function setInternetMaxBandwidthOut($internetMaxBandwidthOut)
    {
        return $this->withInternetMaxBandwidthOut($internetMaxBandwidthOut);
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
     * @deprecated deprecated since version 2.0, Use withTemporaryInternetMaxBandwidthOut() instead.
     *
     * @param string $temporaryInternetMaxBandwidthOut
     *
     * @return $this
     */
    public function setTemporaryInternetMaxBandwidthOut($temporaryInternetMaxBandwidthOut)
    {
        return $this->withTemporaryInternetMaxBandwidthOut($temporaryInternetMaxBandwidthOut);
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
     * @deprecated deprecated since version 2.0, Use withSystemDiskCategory() instead.
     *
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function setSystemDiskCategory($systemDiskCategory)
    {
        return $this->withSystemDiskCategory($systemDiskCategory);
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
     * @deprecated deprecated since version 2.0, Use withTemporaryStartTime() instead.
     *
     * @param string $temporaryStartTime
     *
     * @return $this
     */
    public function setTemporaryStartTime($temporaryStartTime)
    {
        return $this->withTemporaryStartTime($temporaryStartTime);
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
     * @deprecated deprecated since version 2.0, Use withAsync() instead.
     *
     * @param string $async
     *
     * @return $this
     */
    public function setAsync($async)
    {
        return $this->withAsync($async);
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
     * @deprecated deprecated since version 2.0, Use withInstanceType() instead.
     *
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        return $this->withInstanceType($instanceType);
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
     * @deprecated deprecated since version 2.0, Use withTemporaryEndTime() instead.
     *
     * @param string $temporaryEndTime
     *
     * @return $this
     */
    public function setTemporaryEndTime($temporaryEndTime)
    {
        return $this->withTemporaryEndTime($temporaryEndTime);
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
     * @deprecated deprecated since version 2.0, Use withInternetMaxBandwidthIn() instead.
     *
     * @param string $internetMaxBandwidthIn
     *
     * @return $this
     */
    public function setInternetMaxBandwidthIn($internetMaxBandwidthIn)
    {
        return $this->withInternetMaxBandwidthIn($internetMaxBandwidthIn);
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

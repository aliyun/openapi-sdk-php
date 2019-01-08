<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateReadOnlyDBInstance
 *
 * @method string getResourceOwnerId()
 * @method string getDBInstanceStorage()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getEngineVersion()
 * @method string getOwnerId()
 * @method string getDBInstanceClass()
 * @method string getVSwitchId()
 * @method string getPrivateIpAddress()
 * @method string getResourceGroupId()
 * @method string getVPCId()
 * @method string getZoneId()
 * @method string getDBInstanceId()
 * @method string getDBInstanceDescription()
 * @method string getCategory()
 * @method string getPayType()
 * @method string getInstanceNetworkType()
 */
class CreateReadOnlyDBInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Rds';

    /**
     * @var string
     */
    public $version = '2014-08-15';

    /**
     * @var string
     */
    public $action = 'CreateReadOnlyDBInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

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
     * @param string $dBInstanceStorage
     *
     * @return $this
     */
    public function withDBInstanceStorage($dBInstanceStorage)
    {
        $this->data['DBInstanceStorage'] = $dBInstanceStorage;
        $this->options['query']['DBInstanceStorage'] = $dBInstanceStorage;

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
     * @param string $engineVersion
     *
     * @return $this
     */
    public function withEngineVersion($engineVersion)
    {
        $this->data['EngineVersion'] = $engineVersion;
        $this->options['query']['EngineVersion'] = $engineVersion;

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
     * @param string $dBInstanceClass
     *
     * @return $this
     */
    public function withDBInstanceClass($dBInstanceClass)
    {
        $this->data['DBInstanceClass'] = $dBInstanceClass;
        $this->options['query']['DBInstanceClass'] = $dBInstanceClass;

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
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function withPrivateIpAddress($privateIpAddress)
    {
        $this->data['PrivateIpAddress'] = $privateIpAddress;
        $this->options['query']['PrivateIpAddress'] = $privateIpAddress;

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
     * @param string $vPCId
     *
     * @return $this
     */
    public function withVPCId($vPCId)
    {
        $this->data['VPCId'] = $vPCId;
        $this->options['query']['VPCId'] = $vPCId;

        return $this;
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
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function withDBInstanceId($dBInstanceId)
    {
        $this->data['DBInstanceId'] = $dBInstanceId;
        $this->options['query']['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $dBInstanceDescription
     *
     * @return $this
     */
    public function withDBInstanceDescription($dBInstanceDescription)
    {
        $this->data['DBInstanceDescription'] = $dBInstanceDescription;
        $this->options['query']['DBInstanceDescription'] = $dBInstanceDescription;

        return $this;
    }

    /**
     * @param string $category
     *
     * @return $this
     */
    public function withCategory($category)
    {
        $this->data['Category'] = $category;
        $this->options['query']['Category'] = $category;

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
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function withInstanceNetworkType($instanceNetworkType)
    {
        $this->data['InstanceNetworkType'] = $instanceNetworkType;
        $this->options['query']['InstanceNetworkType'] = $instanceNetworkType;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateDBInstance
 *
 * @method string getConnectionMode()
 * @method string getResourceOwnerId()
 * @method string getDBInstanceStorage()
 * @method string getSystemDBCharset()
 * @method string getClientToken()
 * @method string getEngineVersion()
 * @method string getResourceGroupId()
 * @method string getEngine()
 * @method string getDBInstanceDescription()
 * @method string getDBInstanceStorageType()
 * @method string getBusinessInfo()
 * @method string getDBInstanceNetType()
 * @method string getPeriod()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getUsedTime()
 * @method string getDBInstanceClass()
 * @method string getSecurityIPList()
 * @method string getVSwitchId()
 * @method string getPrivateIpAddress()
 * @method string getVPCId()
 * @method string getTunnelId()
 * @method string getZoneId()
 * @method string getPayType()
 * @method string getInstanceNetworkType()
 */
class CreateDBInstance extends RpcRequest
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
    public $action = 'CreateDBInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

    /**
     * @deprecated deprecated since version 2.0, Use withConnectionMode() instead.
     *
     * @param string $connectionMode
     *
     * @return $this
     */
    public function setConnectionMode($connectionMode)
    {
        return $this->withConnectionMode($connectionMode);
    }

    /**
     * @param string $connectionMode
     *
     * @return $this
     */
    public function withConnectionMode($connectionMode)
    {
        $this->data['ConnectionMode'] = $connectionMode;
        $this->options['query']['ConnectionMode'] = $connectionMode;

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
     * @deprecated deprecated since version 2.0, Use withDBInstanceStorage() instead.
     *
     * @param string $dBInstanceStorage
     *
     * @return $this
     */
    public function setDBInstanceStorage($dBInstanceStorage)
    {
        return $this->withDBInstanceStorage($dBInstanceStorage);
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
     * @deprecated deprecated since version 2.0, Use withSystemDBCharset() instead.
     *
     * @param string $systemDBCharset
     *
     * @return $this
     */
    public function setSystemDBCharset($systemDBCharset)
    {
        return $this->withSystemDBCharset($systemDBCharset);
    }

    /**
     * @param string $systemDBCharset
     *
     * @return $this
     */
    public function withSystemDBCharset($systemDBCharset)
    {
        $this->data['SystemDBCharset'] = $systemDBCharset;
        $this->options['query']['SystemDBCharset'] = $systemDBCharset;

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
     * @deprecated deprecated since version 2.0, Use withEngineVersion() instead.
     *
     * @param string $engineVersion
     *
     * @return $this
     */
    public function setEngineVersion($engineVersion)
    {
        return $this->withEngineVersion($engineVersion);
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
     * @deprecated deprecated since version 2.0, Use withEngine() instead.
     *
     * @param string $engine
     *
     * @return $this
     */
    public function setEngine($engine)
    {
        return $this->withEngine($engine);
    }

    /**
     * @param string $engine
     *
     * @return $this
     */
    public function withEngine($engine)
    {
        $this->data['Engine'] = $engine;
        $this->options['query']['Engine'] = $engine;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBInstanceDescription() instead.
     *
     * @param string $dBInstanceDescription
     *
     * @return $this
     */
    public function setDBInstanceDescription($dBInstanceDescription)
    {
        return $this->withDBInstanceDescription($dBInstanceDescription);
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
     * @deprecated deprecated since version 2.0, Use withDBInstanceStorageType() instead.
     *
     * @param string $dBInstanceStorageType
     *
     * @return $this
     */
    public function setDBInstanceStorageType($dBInstanceStorageType)
    {
        return $this->withDBInstanceStorageType($dBInstanceStorageType);
    }

    /**
     * @param string $dBInstanceStorageType
     *
     * @return $this
     */
    public function withDBInstanceStorageType($dBInstanceStorageType)
    {
        $this->data['DBInstanceStorageType'] = $dBInstanceStorageType;
        $this->options['query']['DBInstanceStorageType'] = $dBInstanceStorageType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBusinessInfo() instead.
     *
     * @param string $businessInfo
     *
     * @return $this
     */
    public function setBusinessInfo($businessInfo)
    {
        return $this->withBusinessInfo($businessInfo);
    }

    /**
     * @param string $businessInfo
     *
     * @return $this
     */
    public function withBusinessInfo($businessInfo)
    {
        $this->data['BusinessInfo'] = $businessInfo;
        $this->options['query']['BusinessInfo'] = $businessInfo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDBInstanceNetType() instead.
     *
     * @param string $dBInstanceNetType
     *
     * @return $this
     */
    public function setDBInstanceNetType($dBInstanceNetType)
    {
        return $this->withDBInstanceNetType($dBInstanceNetType);
    }

    /**
     * @param string $dBInstanceNetType
     *
     * @return $this
     */
    public function withDBInstanceNetType($dBInstanceNetType)
    {
        $this->data['DBInstanceNetType'] = $dBInstanceNetType;
        $this->options['query']['DBInstanceNetType'] = $dBInstanceNetType;

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
     * @deprecated deprecated since version 2.0, Use withDBInstanceClass() instead.
     *
     * @param string $dBInstanceClass
     *
     * @return $this
     */
    public function setDBInstanceClass($dBInstanceClass)
    {
        return $this->withDBInstanceClass($dBInstanceClass);
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
     * @deprecated deprecated since version 2.0, Use withSecurityIPList() instead.
     *
     * @param string $securityIPList
     *
     * @return $this
     */
    public function setSecurityIPList($securityIPList)
    {
        return $this->withSecurityIPList($securityIPList);
    }

    /**
     * @param string $securityIPList
     *
     * @return $this
     */
    public function withSecurityIPList($securityIPList)
    {
        $this->data['SecurityIPList'] = $securityIPList;
        $this->options['query']['SecurityIPList'] = $securityIPList;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        return $this->withVSwitchId($vSwitchId);
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
     * @deprecated deprecated since version 2.0, Use withPrivateIpAddress() instead.
     *
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function setPrivateIpAddress($privateIpAddress)
    {
        return $this->withPrivateIpAddress($privateIpAddress);
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
     * @deprecated deprecated since version 2.0, Use withVPCId() instead.
     *
     * @param string $vPCId
     *
     * @return $this
     */
    public function setVPCId($vPCId)
    {
        return $this->withVPCId($vPCId);
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
     * @deprecated deprecated since version 2.0, Use withTunnelId() instead.
     *
     * @param string $tunnelId
     *
     * @return $this
     */
    public function setTunnelId($tunnelId)
    {
        return $this->withTunnelId($tunnelId);
    }

    /**
     * @param string $tunnelId
     *
     * @return $this
     */
    public function withTunnelId($tunnelId)
    {
        $this->data['TunnelId'] = $tunnelId;
        $this->options['query']['TunnelId'] = $tunnelId;

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
     * @deprecated deprecated since version 2.0, Use withInstanceNetworkType() instead.
     *
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function setInstanceNetworkType($instanceNetworkType)
    {
        return $this->withInstanceNetworkType($instanceNetworkType);
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

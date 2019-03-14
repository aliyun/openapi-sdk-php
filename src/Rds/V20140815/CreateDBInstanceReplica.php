<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api CreateDBInstanceReplica
 *
 * @method string getConnectionMode()
 * @method string getDomainMode()
 * @method string getReplicaDescription()
 * @method string getResourceOwnerId()
 * @method string getDBInstanceStorage()
 * @method string getSystemDBCharset()
 * @method string getClientToken()
 * @method string getEngineVersion()
 * @method string getEngine()
 * @method string getDBInstanceDescription()
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
 * @method string getSourceDBInstanceId()
 * @method string getReplicaMode()
 * @method string getVPCId()
 * @method string getZoneId()
 * @method string getPayType()
 * @method string getInstanceNetworkType()
 */
class CreateDBInstanceReplica extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';

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
     * @param string $domainMode
     *
     * @return $this
     */
    public function withDomainMode($domainMode)
    {
        $this->data['DomainMode'] = $domainMode;
        $this->options['query']['DomainMode'] = $domainMode;

        return $this;
    }

    /**
     * @param string $replicaDescription
     *
     * @return $this
     */
    public function withReplicaDescription($replicaDescription)
    {
        $this->data['ReplicaDescription'] = $replicaDescription;
        $this->options['query']['ReplicaDescription'] = $replicaDescription;

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
     * @param string $sourceDBInstanceId
     *
     * @return $this
     */
    public function withSourceDBInstanceId($sourceDBInstanceId)
    {
        $this->data['SourceDBInstanceId'] = $sourceDBInstanceId;
        $this->options['query']['SourceDBInstanceId'] = $sourceDBInstanceId;

        return $this;
    }

    /**
     * @param string $replicaMode
     *
     * @return $this
     */
    public function withReplicaMode($replicaMode)
    {
        $this->data['ReplicaMode'] = $replicaMode;
        $this->options['query']['ReplicaMode'] = $replicaMode;

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

<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateShardingDBInstance
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getEngineVersion()
 * @method string getNetworkType()
 * @method array getReplicaSet()
 * @method string getStorageEngine()
 * @method string getSecurityToken()
 * @method string getEngine()
 * @method string getDBInstanceDescription()
 * @method string getPeriod()
 * @method string getRestoreTime()
 * @method string getResourceOwnerAccount()
 * @method string getSrcDBInstanceId()
 * @method string getOwnerAccount()
 * @method array getConfigServer()
 * @method string getOwnerId()
 * @method array getMongos()
 * @method string getSecurityIPList()
 * @method string getVSwitchId()
 * @method string getAccountPassword()
 * @method string getAutoRenew()
 * @method string getVpcId()
 * @method string getZoneId()
 * @method string getChargeType()
 */
class CreateShardingDBInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dds';

    /**
     * @var string
     */
    public $version = '2015-12-01';

    /**
     * @var string
     */
    public $action = 'CreateShardingDBInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dds';

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
     * @deprecated deprecated since version 2.0, Use withNetworkType() instead.
     *
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        return $this->withNetworkType($networkType);
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function withNetworkType($networkType)
    {
        $this->data['NetworkType'] = $networkType;
        $this->options['query']['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getReplicaSet() instead.
     *
     * @return array
     */
    public function getReplicaSets()
    {
        return $this->getReplicaSet();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withReplicaSet() instead.
     *
     * @param array $replicaSets
     *
     * @return $this
     */
    public function setReplicaSets(array $replicaSets)
    {
        return $this->withReplicaSet($replicaSets);
    }

    /**
     * @param array $replicaSet
     *
     * @return $this
     */
    public function withReplicaSet(array $replicaSet)
    {
        $this->data['ReplicaSet'] = $replicaSet;
        foreach ($replicaSet as $i => $iValue) {
            $this->options['query']['ReplicaSet.' . ($i + 1) . '.Storage'] = $replicaSet[$i]['Storage'];
            $this->options['query']['ReplicaSet.' . ($i + 1) . '.Class'] = $replicaSet[$i]['Class'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStorageEngine() instead.
     *
     * @param string $storageEngine
     *
     * @return $this
     */
    public function setStorageEngine($storageEngine)
    {
        return $this->withStorageEngine($storageEngine);
    }

    /**
     * @param string $storageEngine
     *
     * @return $this
     */
    public function withStorageEngine($storageEngine)
    {
        $this->data['StorageEngine'] = $storageEngine;
        $this->options['query']['StorageEngine'] = $storageEngine;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

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
     * @deprecated deprecated since version 2.0, Use withRestoreTime() instead.
     *
     * @param string $restoreTime
     *
     * @return $this
     */
    public function setRestoreTime($restoreTime)
    {
        return $this->withRestoreTime($restoreTime);
    }

    /**
     * @param string $restoreTime
     *
     * @return $this
     */
    public function withRestoreTime($restoreTime)
    {
        $this->data['RestoreTime'] = $restoreTime;
        $this->options['query']['RestoreTime'] = $restoreTime;

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
     * @deprecated deprecated since version 2.0, Use withSrcDBInstanceId() instead.
     *
     * @param string $srcDBInstanceId
     *
     * @return $this
     */
    public function setSrcDBInstanceId($srcDBInstanceId)
    {
        return $this->withSrcDBInstanceId($srcDBInstanceId);
    }

    /**
     * @param string $srcDBInstanceId
     *
     * @return $this
     */
    public function withSrcDBInstanceId($srcDBInstanceId)
    {
        $this->data['SrcDBInstanceId'] = $srcDBInstanceId;
        $this->options['query']['SrcDBInstanceId'] = $srcDBInstanceId;

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
     * @deprecated deprecated since version 2.0, Use getConfigServer() instead.
     *
     * @return array
     */
    public function getConfigServers()
    {
        return $this->getConfigServer();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withConfigServer() instead.
     *
     * @param array $configServers
     *
     * @return $this
     */
    public function setConfigServers(array $configServers)
    {
        return $this->withConfigServer($configServers);
    }

    /**
     * @param array $configServer
     *
     * @return $this
     */
    public function withConfigServer(array $configServer)
    {
        $this->data['ConfigServer'] = $configServer;
        foreach ($configServer as $i => $iValue) {
            $this->options['query']['ConfigServer.' . ($i + 1) . '.Storage'] = $configServer[$i]['Storage'];
            $this->options['query']['ConfigServer.' . ($i + 1) . '.Class'] = $configServer[$i]['Class'];
        }

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
     * @deprecated deprecated since version 2.0, Use getMongos() instead.
     *
     * @return array
     */
    public function getMongoss()
    {
        return $this->getMongos();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMongos() instead.
     *
     * @param array $mongoss
     *
     * @return $this
     */
    public function setMongoss(array $mongoss)
    {
        return $this->withMongos($mongoss);
    }

    /**
     * @param array $mongos
     *
     * @return $this
     */
    public function withMongos(array $mongos)
    {
        $this->data['Mongos'] = $mongos;
        foreach ($mongos as $i => $iValue) {
            $this->options['query']['Mongos.' . ($i + 1) . '.Class'] = $mongos[$i]['Class'];
        }

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
     * @deprecated deprecated since version 2.0, Use withAccountPassword() instead.
     *
     * @param string $accountPassword
     *
     * @return $this
     */
    public function setAccountPassword($accountPassword)
    {
        return $this->withAccountPassword($accountPassword);
    }

    /**
     * @param string $accountPassword
     *
     * @return $this
     */
    public function withAccountPassword($accountPassword)
    {
        $this->data['AccountPassword'] = $accountPassword;
        $this->options['query']['AccountPassword'] = $accountPassword;

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
     * @deprecated deprecated since version 2.0, Use withVpcId() instead.
     *
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        return $this->withVpcId($vpcId);
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
}

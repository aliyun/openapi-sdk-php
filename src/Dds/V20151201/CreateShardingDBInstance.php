<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method array getReplicaSet()
 * @method string getStorageEngine()
 * @method $this withStorageEngine($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEngine()
 * @method $this withEngine($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSrcDBInstanceId()
 * @method $this withSrcDBInstanceId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getConfigServer()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getMongos()
 * @method string getSecurityIPList()
 * @method $this withSecurityIPList($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class CreateShardingDBInstance extends Rpc
{
    public $product = 'Dds';

    public $version = '2015-12-01';

    public $method = 'POST';

    public $serviceCode = 'dds';

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
}

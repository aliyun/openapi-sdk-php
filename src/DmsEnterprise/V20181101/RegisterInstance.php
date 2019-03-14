<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Rpc;

/**
 * Api RegisterInstance
 *
 * @method string getEcsInstanceId()
 * @method string getEcsRegion()
 * @method string getExportTimeout()
 * @method string getDatabasePassword()
 * @method string getInstanceAlias()
 * @method string getNetworkType()
 * @method string getTid()
 * @method string getSid()
 * @method string getDatabaseUser()
 * @method string getPort()
 * @method string getVpcId()
 * @method string getInstanceSource()
 * @method string getEnvType()
 * @method string getHost()
 * @method string getInstanceType()
 * @method string getQueryTimeout()
 * @method string getDbaUid()
 * @method string getSafeRule()
 */
class RegisterInstance extends Rpc
{
    public $product = 'dms-enterprise';

    public $version = '2018-11-01';

    public $method = 'POST';

    public $serviceCode = 'dmsenterprise';

    /**
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function withEcsInstanceId($ecsInstanceId)
    {
        $this->data['EcsInstanceId'] = $ecsInstanceId;
        $this->options['query']['EcsInstanceId'] = $ecsInstanceId;

        return $this;
    }

    /**
     * @param string $ecsRegion
     *
     * @return $this
     */
    public function withEcsRegion($ecsRegion)
    {
        $this->data['EcsRegion'] = $ecsRegion;
        $this->options['query']['EcsRegion'] = $ecsRegion;

        return $this;
    }

    /**
     * @param string $exportTimeout
     *
     * @return $this
     */
    public function withExportTimeout($exportTimeout)
    {
        $this->data['ExportTimeout'] = $exportTimeout;
        $this->options['query']['ExportTimeout'] = $exportTimeout;

        return $this;
    }

    /**
     * @param string $databasePassword
     *
     * @return $this
     */
    public function withDatabasePassword($databasePassword)
    {
        $this->data['DatabasePassword'] = $databasePassword;
        $this->options['query']['DatabasePassword'] = $databasePassword;

        return $this;
    }

    /**
     * @param string $instanceAlias
     *
     * @return $this
     */
    public function withInstanceAlias($instanceAlias)
    {
        $this->data['InstanceAlias'] = $instanceAlias;
        $this->options['query']['InstanceAlias'] = $instanceAlias;

        return $this;
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
     * @param string $tid
     *
     * @return $this
     */
    public function withTid($tid)
    {
        $this->data['Tid'] = $tid;
        $this->options['query']['Tid'] = $tid;

        return $this;
    }

    /**
     * @param string $sid
     *
     * @return $this
     */
    public function withSid($sid)
    {
        $this->data['Sid'] = $sid;
        $this->options['query']['Sid'] = $sid;

        return $this;
    }

    /**
     * @param string $databaseUser
     *
     * @return $this
     */
    public function withDatabaseUser($databaseUser)
    {
        $this->data['DatabaseUser'] = $databaseUser;
        $this->options['query']['DatabaseUser'] = $databaseUser;

        return $this;
    }

    /**
     * @param string $port
     *
     * @return $this
     */
    public function withPort($port)
    {
        $this->data['Port'] = $port;
        $this->options['query']['Port'] = $port;

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
     * @param string $instanceSource
     *
     * @return $this
     */
    public function withInstanceSource($instanceSource)
    {
        $this->data['InstanceSource'] = $instanceSource;
        $this->options['query']['InstanceSource'] = $instanceSource;

        return $this;
    }

    /**
     * @param string $envType
     *
     * @return $this
     */
    public function withEnvType($envType)
    {
        $this->data['EnvType'] = $envType;
        $this->options['query']['EnvType'] = $envType;

        return $this;
    }

    /**
     * @param string $host
     *
     * @return $this
     */
    public function withHost($host)
    {
        $this->data['Host'] = $host;
        $this->options['query']['Host'] = $host;

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
     * @param string $queryTimeout
     *
     * @return $this
     */
    public function withQueryTimeout($queryTimeout)
    {
        $this->data['QueryTimeout'] = $queryTimeout;
        $this->options['query']['QueryTimeout'] = $queryTimeout;

        return $this;
    }

    /**
     * @param string $dbaUid
     *
     * @return $this
     */
    public function withDbaUid($dbaUid)
    {
        $this->data['DbaUid'] = $dbaUid;
        $this->options['query']['DbaUid'] = $dbaUid;

        return $this;
    }

    /**
     * @param string $safeRule
     *
     * @return $this
     */
    public function withSafeRule($safeRule)
    {
        $this->data['SafeRule'] = $safeRule;
        $this->options['query']['SafeRule'] = $safeRule;

        return $this;
    }
}

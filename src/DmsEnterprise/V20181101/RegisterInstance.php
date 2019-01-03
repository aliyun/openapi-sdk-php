<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RegisterInstance
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
class RegisterInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'dms-enterprise';

    /**
     * @var string
     */
    public $version = '2018-11-01';

    /**
     * @var string
     */
    public $action = 'RegisterInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dmsenterprise';

    /**
     * @deprecated deprecated since version 2.0, Use withEcsInstanceId() instead.
     *
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function setEcsInstanceId($ecsInstanceId)
    {
        return $this->withEcsInstanceId($ecsInstanceId);
    }

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
     * @deprecated deprecated since version 2.0, Use withEcsRegion() instead.
     *
     * @param string $ecsRegion
     *
     * @return $this
     */
    public function setEcsRegion($ecsRegion)
    {
        return $this->withEcsRegion($ecsRegion);
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
     * @deprecated deprecated since version 2.0, Use withExportTimeout() instead.
     *
     * @param string $exportTimeout
     *
     * @return $this
     */
    public function setExportTimeout($exportTimeout)
    {
        return $this->withExportTimeout($exportTimeout);
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
     * @deprecated deprecated since version 2.0, Use withDatabasePassword() instead.
     *
     * @param string $databasePassword
     *
     * @return $this
     */
    public function setDatabasePassword($databasePassword)
    {
        return $this->withDatabasePassword($databasePassword);
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
     * @deprecated deprecated since version 2.0, Use withInstanceAlias() instead.
     *
     * @param string $instanceAlias
     *
     * @return $this
     */
    public function setInstanceAlias($instanceAlias)
    {
        return $this->withInstanceAlias($instanceAlias);
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
     * @deprecated deprecated since version 2.0, Use withTid() instead.
     *
     * @param string $tid
     *
     * @return $this
     */
    public function setTid($tid)
    {
        return $this->withTid($tid);
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
     * @deprecated deprecated since version 2.0, Use withSid() instead.
     *
     * @param string $sid
     *
     * @return $this
     */
    public function setSid($sid)
    {
        return $this->withSid($sid);
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
     * @deprecated deprecated since version 2.0, Use withDatabaseUser() instead.
     *
     * @param string $databaseUser
     *
     * @return $this
     */
    public function setDatabaseUser($databaseUser)
    {
        return $this->withDatabaseUser($databaseUser);
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
     * @deprecated deprecated since version 2.0, Use withPort() instead.
     *
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        return $this->withPort($port);
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
     * @deprecated deprecated since version 2.0, Use withInstanceSource() instead.
     *
     * @param string $instanceSource
     *
     * @return $this
     */
    public function setInstanceSource($instanceSource)
    {
        return $this->withInstanceSource($instanceSource);
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
     * @deprecated deprecated since version 2.0, Use withEnvType() instead.
     *
     * @param string $envType
     *
     * @return $this
     */
    public function setEnvType($envType)
    {
        return $this->withEnvType($envType);
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
     * @deprecated deprecated since version 2.0, Use withHost() instead.
     *
     * @param string $host
     *
     * @return $this
     */
    public function setHost($host)
    {
        return $this->withHost($host);
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
     * @deprecated deprecated since version 2.0, Use withQueryTimeout() instead.
     *
     * @param string $queryTimeout
     *
     * @return $this
     */
    public function setQueryTimeout($queryTimeout)
    {
        return $this->withQueryTimeout($queryTimeout);
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
     * @deprecated deprecated since version 2.0, Use withDbaUid() instead.
     *
     * @param string $dbaUid
     *
     * @return $this
     */
    public function setDbaUid($dbaUid)
    {
        return $this->withDbaUid($dbaUid);
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
     * @deprecated deprecated since version 2.0, Use withSafeRule() instead.
     *
     * @param string $safeRule
     *
     * @return $this
     */
    public function setSafeRule($safeRule)
    {
        return $this->withSafeRule($safeRule);
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

<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateLoadBalancerTCPListener
 *
 * @method string getAccessKeyId()
 * @method string getHealthCheckConnectTimeout()
 * @method string getResourceOwnerId()
 * @method string getHealthCheckURI()
 * @method string getDescription()
 * @method string getUnhealthyThreshold()
 * @method string getHealthyThreshold()
 * @method string getAclStatus()
 * @method string getScheduler()
 * @method string getAclType()
 * @method string getEstablishedTimeout()
 * @method string getMaxConnection()
 * @method string getPersistenceTimeout()
 * @method string getVpcIds()
 * @method string getVServerGroupId()
 * @method string getAclId()
 * @method string getListenerPort()
 * @method string getHealthCheckType()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getHealthCheckDomain()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTags()
 * @method string getLoadBalancerId()
 * @method string getMasterSlaveServerGroupId()
 * @method string getBackendServerPort()
 * @method string getHealthCheckInterval()
 * @method string getHealthCheckConnectPort()
 * @method string getHealthCheckHttpCode()
 */
class CreateLoadBalancerTCPListener extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Slb';

    /**
     * @var string
     */
    public $version = '2014-05-15';

    /**
     * @var string
     */
    public $action = 'CreateLoadBalancerTCPListener';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'slb';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

        return $this;
    }

    /**
     * @param string $healthCheckConnectTimeout
     *
     * @return $this
     */
    public function withHealthCheckConnectTimeout($healthCheckConnectTimeout)
    {
        $this->data['HealthCheckConnectTimeout'] = $healthCheckConnectTimeout;
        $this->options['query']['HealthCheckConnectTimeout'] = $healthCheckConnectTimeout;

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
     * @param string $healthCheckURI
     *
     * @return $this
     */
    public function withHealthCheckURI($healthCheckURI)
    {
        $this->data['HealthCheckURI'] = $healthCheckURI;
        $this->options['query']['HealthCheckURI'] = $healthCheckURI;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $unhealthyThreshold
     *
     * @return $this
     */
    public function withUnhealthyThreshold($unhealthyThreshold)
    {
        $this->data['UnhealthyThreshold'] = $unhealthyThreshold;
        $this->options['query']['UnhealthyThreshold'] = $unhealthyThreshold;

        return $this;
    }

    /**
     * @param string $healthyThreshold
     *
     * @return $this
     */
    public function withHealthyThreshold($healthyThreshold)
    {
        $this->data['HealthyThreshold'] = $healthyThreshold;
        $this->options['query']['HealthyThreshold'] = $healthyThreshold;

        return $this;
    }

    /**
     * @param string $aclStatus
     *
     * @return $this
     */
    public function withAclStatus($aclStatus)
    {
        $this->data['AclStatus'] = $aclStatus;
        $this->options['query']['AclStatus'] = $aclStatus;

        return $this;
    }

    /**
     * @param string $scheduler
     *
     * @return $this
     */
    public function withScheduler($scheduler)
    {
        $this->data['Scheduler'] = $scheduler;
        $this->options['query']['Scheduler'] = $scheduler;

        return $this;
    }

    /**
     * @param string $aclType
     *
     * @return $this
     */
    public function withAclType($aclType)
    {
        $this->data['AclType'] = $aclType;
        $this->options['query']['AclType'] = $aclType;

        return $this;
    }

    /**
     * @param string $establishedTimeout
     *
     * @return $this
     */
    public function withEstablishedTimeout($establishedTimeout)
    {
        $this->data['EstablishedTimeout'] = $establishedTimeout;
        $this->options['query']['EstablishedTimeout'] = $establishedTimeout;

        return $this;
    }

    /**
     * @param string $maxConnection
     *
     * @return $this
     */
    public function withMaxConnection($maxConnection)
    {
        $this->data['MaxConnection'] = $maxConnection;
        $this->options['query']['MaxConnection'] = $maxConnection;

        return $this;
    }

    /**
     * @param string $persistenceTimeout
     *
     * @return $this
     */
    public function withPersistenceTimeout($persistenceTimeout)
    {
        $this->data['PersistenceTimeout'] = $persistenceTimeout;
        $this->options['query']['PersistenceTimeout'] = $persistenceTimeout;

        return $this;
    }

    /**
     * @param string $vpcIds
     *
     * @return $this
     */
    public function withVpcIds($vpcIds)
    {
        $this->data['VpcIds'] = $vpcIds;
        $this->options['query']['VpcIds'] = $vpcIds;

        return $this;
    }

    /**
     * @param string $vServerGroupId
     *
     * @return $this
     */
    public function withVServerGroupId($vServerGroupId)
    {
        $this->data['VServerGroupId'] = $vServerGroupId;
        $this->options['query']['VServerGroupId'] = $vServerGroupId;

        return $this;
    }

    /**
     * @param string $aclId
     *
     * @return $this
     */
    public function withAclId($aclId)
    {
        $this->data['AclId'] = $aclId;
        $this->options['query']['AclId'] = $aclId;

        return $this;
    }

    /**
     * @param string $listenerPort
     *
     * @return $this
     */
    public function withListenerPort($listenerPort)
    {
        $this->data['ListenerPort'] = $listenerPort;
        $this->options['query']['ListenerPort'] = $listenerPort;

        return $this;
    }

    /**
     * @param string $healthCheckType
     *
     * @return $this
     */
    public function withHealthCheckType($healthCheckType)
    {
        $this->data['HealthCheckType'] = $healthCheckType;
        $this->options['query']['HealthCheckType'] = $healthCheckType;

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
     * @param string $bandwidth
     *
     * @return $this
     */
    public function withBandwidth($bandwidth)
    {
        $this->data['Bandwidth'] = $bandwidth;
        $this->options['query']['Bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * @param string $healthCheckDomain
     *
     * @return $this
     */
    public function withHealthCheckDomain($healthCheckDomain)
    {
        $this->data['HealthCheckDomain'] = $healthCheckDomain;
        $this->options['query']['HealthCheckDomain'] = $healthCheckDomain;

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
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }

    /**
     * @param string $loadBalancerId
     *
     * @return $this
     */
    public function withLoadBalancerId($loadBalancerId)
    {
        $this->data['LoadBalancerId'] = $loadBalancerId;
        $this->options['query']['LoadBalancerId'] = $loadBalancerId;

        return $this;
    }

    /**
     * @param string $masterSlaveServerGroupId
     *
     * @return $this
     */
    public function withMasterSlaveServerGroupId($masterSlaveServerGroupId)
    {
        $this->data['MasterSlaveServerGroupId'] = $masterSlaveServerGroupId;
        $this->options['query']['MasterSlaveServerGroupId'] = $masterSlaveServerGroupId;

        return $this;
    }

    /**
     * @param string $backendServerPort
     *
     * @return $this
     */
    public function withBackendServerPort($backendServerPort)
    {
        $this->data['BackendServerPort'] = $backendServerPort;
        $this->options['query']['BackendServerPort'] = $backendServerPort;

        return $this;
    }

    /**
     * @param string $healthCheckInterval
     *
     * @return $this
     */
    public function withHealthCheckInterval($healthCheckInterval)
    {
        $this->data['HealthCheckInterval'] = $healthCheckInterval;
        $this->options['query']['healthCheckInterval'] = $healthCheckInterval;

        return $this;
    }

    /**
     * @param string $healthCheckConnectPort
     *
     * @return $this
     */
    public function withHealthCheckConnectPort($healthCheckConnectPort)
    {
        $this->data['HealthCheckConnectPort'] = $healthCheckConnectPort;
        $this->options['query']['HealthCheckConnectPort'] = $healthCheckConnectPort;

        return $this;
    }

    /**
     * @param string $healthCheckHttpCode
     *
     * @return $this
     */
    public function withHealthCheckHttpCode($healthCheckHttpCode)
    {
        $this->data['HealthCheckHttpCode'] = $healthCheckHttpCode;
        $this->options['query']['HealthCheckHttpCode'] = $healthCheckHttpCode;

        return $this;
    }
}

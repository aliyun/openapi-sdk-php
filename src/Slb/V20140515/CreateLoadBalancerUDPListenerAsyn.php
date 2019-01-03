<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateLoadBalancerUDPListenerAsyn
 *
 * @method string getAccessKeyId()
 * @method string getHealthCheckConnectTimeout()
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getUnhealthyThreshold()
 * @method string getHealthyThreshold()
 * @method string getAclStatus()
 * @method string getScheduler()
 * @method string getAclType()
 * @method string getMaxConnection()
 * @method string getPersistenceTimeout()
 * @method string getVpcIds()
 * @method string getVServerGroupId()
 * @method string getAclId()
 * @method string getListenerPort()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTags()
 * @method string getLoadBalancerId()
 * @method string getMasterSlaveServerGroupId()
 * @method string getHealthCheckReq()
 * @method string getBackendServerPort()
 * @method string getHealthCheckInterval()
 * @method string getHealthCheckExp()
 * @method string getHealthCheckConnectPort()
 */
class CreateLoadBalancerUDPListenerAsyn extends RpcRequest
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
    public $action = 'CreateLoadBalancerUDPListenerAsyn';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'slb';

    /**
     * @deprecated deprecated since version 2.0, Use getAccessKeyId() instead.
     *
     * @return string
     */
    public function getaccess_key_id()
    {
        return $this->getAccessKeyId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAccessKeyId() instead.
     *
     * @param string $access_key_id
     *
     * @return $this
     */
    public function setaccess_key_id($access_key_id)
    {
        return $this->withAccessKeyId($access_key_id);
    }

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
     * @deprecated deprecated since version 2.0, Use withHealthCheckConnectTimeout() instead.
     *
     * @param string $healthCheckConnectTimeout
     *
     * @return $this
     */
    public function setHealthCheckConnectTimeout($healthCheckConnectTimeout)
    {
        return $this->withHealthCheckConnectTimeout($healthCheckConnectTimeout);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withUnhealthyThreshold() instead.
     *
     * @param string $unhealthyThreshold
     *
     * @return $this
     */
    public function setUnhealthyThreshold($unhealthyThreshold)
    {
        return $this->withUnhealthyThreshold($unhealthyThreshold);
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
     * @deprecated deprecated since version 2.0, Use withHealthyThreshold() instead.
     *
     * @param string $healthyThreshold
     *
     * @return $this
     */
    public function setHealthyThreshold($healthyThreshold)
    {
        return $this->withHealthyThreshold($healthyThreshold);
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
     * @deprecated deprecated since version 2.0, Use withAclStatus() instead.
     *
     * @param string $aclStatus
     *
     * @return $this
     */
    public function setAclStatus($aclStatus)
    {
        return $this->withAclStatus($aclStatus);
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
     * @deprecated deprecated since version 2.0, Use withScheduler() instead.
     *
     * @param string $scheduler
     *
     * @return $this
     */
    public function setScheduler($scheduler)
    {
        return $this->withScheduler($scheduler);
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
     * @deprecated deprecated since version 2.0, Use withAclType() instead.
     *
     * @param string $aclType
     *
     * @return $this
     */
    public function setAclType($aclType)
    {
        return $this->withAclType($aclType);
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
     * @deprecated deprecated since version 2.0, Use withMaxConnection() instead.
     *
     * @param string $maxConnection
     *
     * @return $this
     */
    public function setMaxConnection($maxConnection)
    {
        return $this->withMaxConnection($maxConnection);
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
     * @deprecated deprecated since version 2.0, Use withPersistenceTimeout() instead.
     *
     * @param string $persistenceTimeout
     *
     * @return $this
     */
    public function setPersistenceTimeout($persistenceTimeout)
    {
        return $this->withPersistenceTimeout($persistenceTimeout);
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
     * @deprecated deprecated since version 2.0, Use withVpcIds() instead.
     *
     * @param string $vpcIds
     *
     * @return $this
     */
    public function setVpcIds($vpcIds)
    {
        return $this->withVpcIds($vpcIds);
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
     * @deprecated deprecated since version 2.0, Use withVServerGroupId() instead.
     *
     * @param string $vServerGroupId
     *
     * @return $this
     */
    public function setVServerGroupId($vServerGroupId)
    {
        return $this->withVServerGroupId($vServerGroupId);
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
     * @deprecated deprecated since version 2.0, Use withAclId() instead.
     *
     * @param string $aclId
     *
     * @return $this
     */
    public function setAclId($aclId)
    {
        return $this->withAclId($aclId);
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
     * @deprecated deprecated since version 2.0, Use withListenerPort() instead.
     *
     * @param string $listenerPort
     *
     * @return $this
     */
    public function setListenerPort($listenerPort)
    {
        return $this->withListenerPort($listenerPort);
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
     * @deprecated deprecated since version 2.0, Use withBandwidth() instead.
     *
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        return $this->withBandwidth($bandwidth);
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
     * @deprecated deprecated since version 2.0, Use withTags() instead.
     *
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        return $this->withTags($tags);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerId() instead.
     *
     * @param string $loadBalancerId
     *
     * @return $this
     */
    public function setLoadBalancerId($loadBalancerId)
    {
        return $this->withLoadBalancerId($loadBalancerId);
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
     * @deprecated deprecated since version 2.0, Use withMasterSlaveServerGroupId() instead.
     *
     * @param string $masterSlaveServerGroupId
     *
     * @return $this
     */
    public function setMasterSlaveServerGroupId($masterSlaveServerGroupId)
    {
        return $this->withMasterSlaveServerGroupId($masterSlaveServerGroupId);
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
     * @deprecated deprecated since version 2.0, Use withHealthCheckReq() instead.
     *
     * @param string $healthCheckReq
     *
     * @return $this
     */
    public function sethealthCheckReq($healthCheckReq)
    {
        return $this->withHealthCheckReq($healthCheckReq);
    }

    /**
     * @param string $healthCheckReq
     *
     * @return $this
     */
    public function withHealthCheckReq($healthCheckReq)
    {
        $this->data['HealthCheckReq'] = $healthCheckReq;
        $this->options['query']['healthCheckReq'] = $healthCheckReq;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBackendServerPort() instead.
     *
     * @param string $backendServerPort
     *
     * @return $this
     */
    public function setBackendServerPort($backendServerPort)
    {
        return $this->withBackendServerPort($backendServerPort);
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
     * @deprecated deprecated since version 2.0, Use withHealthCheckInterval() instead.
     *
     * @param string $healthCheckInterval
     *
     * @return $this
     */
    public function sethealthCheckInterval($healthCheckInterval)
    {
        return $this->withHealthCheckInterval($healthCheckInterval);
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
     * @deprecated deprecated since version 2.0, Use withHealthCheckExp() instead.
     *
     * @param string $healthCheckExp
     *
     * @return $this
     */
    public function sethealthCheckExp($healthCheckExp)
    {
        return $this->withHealthCheckExp($healthCheckExp);
    }

    /**
     * @param string $healthCheckExp
     *
     * @return $this
     */
    public function withHealthCheckExp($healthCheckExp)
    {
        $this->data['HealthCheckExp'] = $healthCheckExp;
        $this->options['query']['healthCheckExp'] = $healthCheckExp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHealthCheckConnectPort() instead.
     *
     * @param string $healthCheckConnectPort
     *
     * @return $this
     */
    public function setHealthCheckConnectPort($healthCheckConnectPort)
    {
        return $this->withHealthCheckConnectPort($healthCheckConnectPort);
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
}

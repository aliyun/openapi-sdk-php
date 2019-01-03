<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateLoadBalancerHTTPListener
 *
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method string getHealthCheckTimeout()
 * @method string getListenerForward()
 * @method string getXForwardedFor()
 * @method string getHealthCheckURI()
 * @method string getDescription()
 * @method string getUnhealthyThreshold()
 * @method string getHealthyThreshold()
 * @method string getAclStatus()
 * @method string getScheduler()
 * @method string getAclType()
 * @method string getHealthCheck()
 * @method string getForwardPort()
 * @method string getMaxConnection()
 * @method string getCookieTimeout()
 * @method string getStickySessionType()
 * @method string getVpcIds()
 * @method string getVServerGroupId()
 * @method string getAclId()
 * @method string getListenerPort()
 * @method string getCookie()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getStickySession()
 * @method string getHealthCheckDomain()
 * @method string getRequestTimeout()
 * @method string getOwnerAccount()
 * @method string getGzip()
 * @method string getOwnerId()
 * @method string getTags()
 * @method string getIdleTimeout()
 * @method string getLoadBalancerId()
 * @method string getXForwardedForSLBIP()
 * @method string getBackendServerPort()
 * @method string getHealthCheckInterval()
 * @method string getXForwardedForProto()
 * @method string getXForwardedForSLBID()
 * @method string getHealthCheckConnectPort()
 * @method string getHealthCheckHttpCode()
 */
class CreateLoadBalancerHTTPListener extends RpcRequest
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
    public $action = 'CreateLoadBalancerHTTPListener';

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
     * @deprecated deprecated since version 2.0, Use withHealthCheckTimeout() instead.
     *
     * @param string $healthCheckTimeout
     *
     * @return $this
     */
    public function setHealthCheckTimeout($healthCheckTimeout)
    {
        return $this->withHealthCheckTimeout($healthCheckTimeout);
    }

    /**
     * @param string $healthCheckTimeout
     *
     * @return $this
     */
    public function withHealthCheckTimeout($healthCheckTimeout)
    {
        $this->data['HealthCheckTimeout'] = $healthCheckTimeout;
        $this->options['query']['HealthCheckTimeout'] = $healthCheckTimeout;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withListenerForward() instead.
     *
     * @param string $listenerForward
     *
     * @return $this
     */
    public function setListenerForward($listenerForward)
    {
        return $this->withListenerForward($listenerForward);
    }

    /**
     * @param string $listenerForward
     *
     * @return $this
     */
    public function withListenerForward($listenerForward)
    {
        $this->data['ListenerForward'] = $listenerForward;
        $this->options['query']['ListenerForward'] = $listenerForward;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withXForwardedFor() instead.
     *
     * @param string $xForwardedFor
     *
     * @return $this
     */
    public function setXForwardedFor($xForwardedFor)
    {
        return $this->withXForwardedFor($xForwardedFor);
    }

    /**
     * @param string $xForwardedFor
     *
     * @return $this
     */
    public function withXForwardedFor($xForwardedFor)
    {
        $this->data['XForwardedFor'] = $xForwardedFor;
        $this->options['query']['XForwardedFor'] = $xForwardedFor;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHealthCheckURI() instead.
     *
     * @param string $healthCheckURI
     *
     * @return $this
     */
    public function setHealthCheckURI($healthCheckURI)
    {
        return $this->withHealthCheckURI($healthCheckURI);
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
     * @deprecated deprecated since version 2.0, Use withHealthCheck() instead.
     *
     * @param string $healthCheck
     *
     * @return $this
     */
    public function setHealthCheck($healthCheck)
    {
        return $this->withHealthCheck($healthCheck);
    }

    /**
     * @param string $healthCheck
     *
     * @return $this
     */
    public function withHealthCheck($healthCheck)
    {
        $this->data['HealthCheck'] = $healthCheck;
        $this->options['query']['HealthCheck'] = $healthCheck;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withForwardPort() instead.
     *
     * @param string $forwardPort
     *
     * @return $this
     */
    public function setForwardPort($forwardPort)
    {
        return $this->withForwardPort($forwardPort);
    }

    /**
     * @param string $forwardPort
     *
     * @return $this
     */
    public function withForwardPort($forwardPort)
    {
        $this->data['ForwardPort'] = $forwardPort;
        $this->options['query']['ForwardPort'] = $forwardPort;

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
     * @deprecated deprecated since version 2.0, Use withCookieTimeout() instead.
     *
     * @param string $cookieTimeout
     *
     * @return $this
     */
    public function setCookieTimeout($cookieTimeout)
    {
        return $this->withCookieTimeout($cookieTimeout);
    }

    /**
     * @param string $cookieTimeout
     *
     * @return $this
     */
    public function withCookieTimeout($cookieTimeout)
    {
        $this->data['CookieTimeout'] = $cookieTimeout;
        $this->options['query']['CookieTimeout'] = $cookieTimeout;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStickySessionType() instead.
     *
     * @param string $stickySessionType
     *
     * @return $this
     */
    public function setStickySessionType($stickySessionType)
    {
        return $this->withStickySessionType($stickySessionType);
    }

    /**
     * @param string $stickySessionType
     *
     * @return $this
     */
    public function withStickySessionType($stickySessionType)
    {
        $this->data['StickySessionType'] = $stickySessionType;
        $this->options['query']['StickySessionType'] = $stickySessionType;

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
     * @deprecated deprecated since version 2.0, Use withCookie() instead.
     *
     * @param string $cookie
     *
     * @return $this
     */
    public function setCookie($cookie)
    {
        return $this->withCookie($cookie);
    }

    /**
     * @param string $cookie
     *
     * @return $this
     */
    public function withCookie($cookie)
    {
        $this->data['Cookie'] = $cookie;
        $this->options['query']['Cookie'] = $cookie;

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
     * @deprecated deprecated since version 2.0, Use withStickySession() instead.
     *
     * @param string $stickySession
     *
     * @return $this
     */
    public function setStickySession($stickySession)
    {
        return $this->withStickySession($stickySession);
    }

    /**
     * @param string $stickySession
     *
     * @return $this
     */
    public function withStickySession($stickySession)
    {
        $this->data['StickySession'] = $stickySession;
        $this->options['query']['StickySession'] = $stickySession;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHealthCheckDomain() instead.
     *
     * @param string $healthCheckDomain
     *
     * @return $this
     */
    public function setHealthCheckDomain($healthCheckDomain)
    {
        return $this->withHealthCheckDomain($healthCheckDomain);
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
     * @deprecated deprecated since version 2.0, Use withRequestTimeout() instead.
     *
     * @param string $requestTimeout
     *
     * @return $this
     */
    public function setRequestTimeout($requestTimeout)
    {
        return $this->withRequestTimeout($requestTimeout);
    }

    /**
     * @param string $requestTimeout
     *
     * @return $this
     */
    public function withRequestTimeout($requestTimeout)
    {
        $this->data['RequestTimeout'] = $requestTimeout;
        $this->options['query']['RequestTimeout'] = $requestTimeout;

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
     * @deprecated deprecated since version 2.0, Use withGzip() instead.
     *
     * @param string $gzip
     *
     * @return $this
     */
    public function setGzip($gzip)
    {
        return $this->withGzip($gzip);
    }

    /**
     * @param string $gzip
     *
     * @return $this
     */
    public function withGzip($gzip)
    {
        $this->data['Gzip'] = $gzip;
        $this->options['query']['Gzip'] = $gzip;

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
     * @deprecated deprecated since version 2.0, Use withIdleTimeout() instead.
     *
     * @param string $idleTimeout
     *
     * @return $this
     */
    public function setIdleTimeout($idleTimeout)
    {
        return $this->withIdleTimeout($idleTimeout);
    }

    /**
     * @param string $idleTimeout
     *
     * @return $this
     */
    public function withIdleTimeout($idleTimeout)
    {
        $this->data['IdleTimeout'] = $idleTimeout;
        $this->options['query']['IdleTimeout'] = $idleTimeout;

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
     * @deprecated deprecated since version 2.0, Use getXForwardedForSLBIP() instead.
     *
     * @return string
     */
    public function getXForwardedFor_SLBIP()
    {
        return $this->getXForwardedForSLBIP();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withXForwardedForSLBIP() instead.
     *
     * @param string $xForwardedFor_SLBIP
     *
     * @return $this
     */
    public function setXForwardedFor_SLBIP($xForwardedFor_SLBIP)
    {
        return $this->withXForwardedForSLBIP($xForwardedFor_SLBIP);
    }

    /**
     * @param string $xForwardedForSLBIP
     *
     * @return $this
     */
    public function withXForwardedForSLBIP($xForwardedForSLBIP)
    {
        $this->data['XForwardedForSLBIP'] = $xForwardedForSLBIP;
        $this->options['query']['XForwardedFor_SLBIP'] = $xForwardedForSLBIP;

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
    public function setHealthCheckInterval($healthCheckInterval)
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
        $this->options['query']['HealthCheckInterval'] = $healthCheckInterval;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getXForwardedForProto() instead.
     *
     * @return string
     */
    public function getXForwardedFor_proto()
    {
        return $this->getXForwardedForProto();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withXForwardedForProto() instead.
     *
     * @param string $xForwardedFor_proto
     *
     * @return $this
     */
    public function setXForwardedFor_proto($xForwardedFor_proto)
    {
        return $this->withXForwardedForProto($xForwardedFor_proto);
    }

    /**
     * @param string $xForwardedForProto
     *
     * @return $this
     */
    public function withXForwardedForProto($xForwardedForProto)
    {
        $this->data['XForwardedForProto'] = $xForwardedForProto;
        $this->options['query']['XForwardedFor_proto'] = $xForwardedForProto;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getXForwardedForSLBID() instead.
     *
     * @return string
     */
    public function getXForwardedFor_SLBID()
    {
        return $this->getXForwardedForSLBID();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withXForwardedForSLBID() instead.
     *
     * @param string $xForwardedFor_SLBID
     *
     * @return $this
     */
    public function setXForwardedFor_SLBID($xForwardedFor_SLBID)
    {
        return $this->withXForwardedForSLBID($xForwardedFor_SLBID);
    }

    /**
     * @param string $xForwardedForSLBID
     *
     * @return $this
     */
    public function withXForwardedForSLBID($xForwardedForSLBID)
    {
        $this->data['XForwardedForSLBID'] = $xForwardedForSLBID;
        $this->options['query']['XForwardedFor_SLBID'] = $xForwardedForSLBID;

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

    /**
     * @deprecated deprecated since version 2.0, Use withHealthCheckHttpCode() instead.
     *
     * @param string $healthCheckHttpCode
     *
     * @return $this
     */
    public function setHealthCheckHttpCode($healthCheckHttpCode)
    {
        return $this->withHealthCheckHttpCode($healthCheckHttpCode);
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

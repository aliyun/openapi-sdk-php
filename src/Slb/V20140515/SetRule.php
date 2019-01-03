<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetRule
 *
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method string getHealthCheckTimeout()
 * @method string getHealthCheckURI()
 * @method string getRuleName()
 * @method string getUnhealthyThreshold()
 * @method string getHealthyThreshold()
 * @method string getScheduler()
 * @method string getHealthCheck()
 * @method string getListenerSync()
 * @method string getCookieTimeout()
 * @method string getStickySessionType()
 * @method string getVServerGroupId()
 * @method string getCookie()
 * @method string getResourceOwnerAccount()
 * @method string getStickySession()
 * @method string getHealthCheckDomain()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTags()
 * @method string getHealthCheckInterval()
 * @method string getRuleId()
 * @method string getHealthCheckConnectPort()
 * @method string getHealthCheckHttpCode()
 */
class SetRule extends RpcRequest
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
    public $action = 'SetRule';

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
     * @deprecated deprecated since version 2.0, Use withRuleName() instead.
     *
     * @param string $ruleName
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        return $this->withRuleName($ruleName);
    }

    /**
     * @param string $ruleName
     *
     * @return $this
     */
    public function withRuleName($ruleName)
    {
        $this->data['RuleName'] = $ruleName;
        $this->options['query']['RuleName'] = $ruleName;

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
     * @deprecated deprecated since version 2.0, Use withListenerSync() instead.
     *
     * @param string $listenerSync
     *
     * @return $this
     */
    public function setListenerSync($listenerSync)
    {
        return $this->withListenerSync($listenerSync);
    }

    /**
     * @param string $listenerSync
     *
     * @return $this
     */
    public function withListenerSync($listenerSync)
    {
        $this->data['ListenerSync'] = $listenerSync;
        $this->options['query']['ListenerSync'] = $listenerSync;

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
     * @deprecated deprecated since version 2.0, Use withRuleId() instead.
     *
     * @param string $ruleId
     *
     * @return $this
     */
    public function setRuleId($ruleId)
    {
        return $this->withRuleId($ruleId);
    }

    /**
     * @param string $ruleId
     *
     * @return $this
     */
    public function withRuleId($ruleId)
    {
        $this->data['RuleId'] = $ruleId;
        $this->options['query']['RuleId'] = $ruleId;

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

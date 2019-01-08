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

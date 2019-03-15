<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Rpc;

/**
 * @method string getAccessKeyId()
 * @method string getEagleEyeProtocol()
 * @method $this withEagleEyeProtocol($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getXForwardedFor()
 * @method $this withXForwardedFor($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getMaxConnection()
 * @method $this withMaxConnection($value)
 * @method string getEnableHttp2()
 * @method $this withEnableHttp2($value)
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getEagleEyeRate()
 * @method $this withEagleEyeRate($value)
 * @method string getStickySessionType()
 * @method $this withStickySessionType($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getGzip()
 * @method $this withGzip($value)
 * @method string getTLSCipherPolicy()
 * @method $this withTLSCipherPolicy($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerCertificateId()
 * @method $this withServerCertificateId($value)
 * @method string getCACertificateId()
 * @method $this withCACertificateId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getXForwardedForSLBIP()
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getXForwardedForProto()
 * @method string getXForwardedForSLBID()
 * @method string getEagleEyeStatus()
 * @method $this withEagleEyeStatus($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 * @method string getVServerGroup()
 * @method $this withVServerGroup($value)
 */
class SetLoadBalancerHTTPSListenerAttribute extends Rpc
{
    public $product = 'Slb';

    public $version = '2014-05-15';

    public $method = 'POST';

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
}

<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * Api AddIpControlPolicyItem
 *
 * @method string getIpControlId()
 * @method string getSecurityToken()
 * @method string getAppId()
 * @method string getCidrIp()
 */
class AddIpControlPolicyItem extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';

    /**
     * @param string $ipControlId
     *
     * @return $this
     */
    public function withIpControlId($ipControlId)
    {
        $this->data['IpControlId'] = $ipControlId;
        $this->options['query']['IpControlId'] = $ipControlId;

        return $this;
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
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $cidrIp
     *
     * @return $this
     */
    public function withCidrIp($cidrIp)
    {
        $this->data['CidrIp'] = $cidrIp;
        $this->options['query']['CidrIp'] = $cidrIp;

        return $this;
    }
}

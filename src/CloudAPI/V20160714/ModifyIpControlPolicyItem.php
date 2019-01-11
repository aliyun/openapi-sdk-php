<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyIpControlPolicyItem
 *
 * @method string getIpControlId()
 * @method string getPolicyItemId()
 * @method string getSecurityToken()
 * @method string getAppId()
 * @method string getCidrIp()
 */
class ModifyIpControlPolicyItem extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'ModifyIpControlPolicyItem';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $policyItemId
     *
     * @return $this
     */
    public function withPolicyItemId($policyItemId)
    {
        $this->data['PolicyItemId'] = $policyItemId;
        $this->options['query']['PolicyItemId'] = $policyItemId;

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

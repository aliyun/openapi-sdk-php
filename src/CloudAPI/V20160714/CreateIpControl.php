<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateIpControl
 *
 * @method string getSecurityToken()
 * @method string getIpControlName()
 * @method string getIpControlType()
 * @method array getIpControlPolicys()
 * @method string getDescription()
 */
class CreateIpControl extends RpcRequest
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
    public $action = 'CreateIpControl';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

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
     * @param string $ipControlName
     *
     * @return $this
     */
    public function withIpControlName($ipControlName)
    {
        $this->data['IpControlName'] = $ipControlName;
        $this->options['query']['IpControlName'] = $ipControlName;

        return $this;
    }

    /**
     * @param string $ipControlType
     *
     * @return $this
     */
    public function withIpControlType($ipControlType)
    {
        $this->data['IpControlType'] = $ipControlType;
        $this->options['query']['IpControlType'] = $ipControlType;

        return $this;
    }

    /**
     * @param array $ipControlPolicys
     *
     * @return $this
     */
    public function withIpControlPolicys(array $ipControlPolicys)
    {
        $this->data['IpControlPolicys'] = $ipControlPolicys;
        foreach ($ipControlPolicys as $i => $iValue) {
            $this->options['query']['IpControlPolicys.' . ($i + 1) . '.AppId'] = $ipControlPolicys[$i]['AppId'];
            $this->options['query']['IpControlPolicys.' . ($i + 1) . '.CidrIp'] = $ipControlPolicys[$i]['CidrIp'];
        }

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
}

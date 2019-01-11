<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyIpControl
 *
 * @method string getIpControlId()
 * @method string getSecurityToken()
 * @method string getIpControlName()
 * @method string getDescription()
 */
class ModifyIpControl extends RpcRequest
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
    public $action = 'ModifyIpControl';

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

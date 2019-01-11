<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveIpControlPolicyItem
 *
 * @method string getIpControlId()
 * @method string getSecurityToken()
 * @method string getPolicyItemIds()
 */
class RemoveIpControlPolicyItem extends RpcRequest
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
    public $action = 'RemoveIpControlPolicyItem';

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
     * @param string $policyItemIds
     *
     * @return $this
     */
    public function withPolicyItemIds($policyItemIds)
    {
        $this->data['PolicyItemIds'] = $policyItemIds;
        $this->options['query']['PolicyItemIds'] = $policyItemIds;

        return $this;
    }
}

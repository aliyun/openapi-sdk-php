<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Rpc;

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method array getServerId()
 */
class DiagnoseHealthCheckStatus extends Rpc
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
     * @param array $serverId
     *
     * @return $this
     */
    public function withServerId(array $serverId)
    {
        $this->data['ServerId'] = $serverId;
        foreach ($serverId as $i => $iValue) {
            $this->options['query']['ServerId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getReason()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInternetIp()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getChannel()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOperator()
 * @method string getToken()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLockType()
 * @method string getId()
 * @method string getProof()
 * @method string getProxyId()
 */
class InnerMaliceEcsUnlock extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function withReason($reason)
    {
        $this->data['Reason'] = $reason;
        $this->options['query']['reason'] = $reason;

        return $this;
    }

    /**
     * @param string $internetIp
     *
     * @return $this
     */
    public function withInternetIp($internetIp)
    {
        $this->data['InternetIp'] = $internetIp;
        $this->options['query']['internetIp'] = $internetIp;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function withChannel($channel)
    {
        $this->data['Channel'] = $channel;
        $this->options['query']['channel'] = $channel;

        return $this;
    }

    /**
     * @param string $operator
     *
     * @return $this
     */
    public function withOperator($operator)
    {
        $this->data['Operator'] = $operator;
        $this->options['query']['operator'] = $operator;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function withToken($token)
    {
        $this->data['Token'] = $token;
        $this->options['query']['token'] = $token;

        return $this;
    }

    /**
     * @param string $lockType
     *
     * @return $this
     */
    public function withLockType($lockType)
    {
        $this->data['LockType'] = $lockType;
        $this->options['query']['lockType'] = $lockType;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['id'] = $id;

        return $this;
    }

    /**
     * @param string $proof
     *
     * @return $this
     */
    public function withProof($proof)
    {
        $this->data['Proof'] = $proof;
        $this->options['query']['proof'] = $proof;

        return $this;
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function withProxyId($proxyId)
    {
        $this->data['ProxyId'] = $proxyId;
        $this->options['query']['proxyId'] = $proxyId;

        return $this;
    }
}

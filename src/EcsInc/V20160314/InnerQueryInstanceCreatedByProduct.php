<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getPrivateIpAddresses()
 * @method array getAliUids()
 * @method array getInstanceTypes()
 * @method string getChannel()
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getOperator()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getPublicIpAddresses()
 * @method string getProxyId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 */
class InnerQueryInstanceCreatedByProduct extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $privateIpAddresses
     *
     * @return $this
     */
    public function withPrivateIpAddresses(array $privateIpAddresses)
    {
        $this->data['PrivateIpAddresses'] = $privateIpAddresses;
        foreach ($privateIpAddresses as $i => $iValue) {
            $this->options['query']['PrivateIpAddresses.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $aliUids
     *
     * @return $this
     */
    public function withAliUids(array $aliUids)
    {
        $this->data['AliUids'] = $aliUids;
        foreach ($aliUids as $i => $iValue) {
            $this->options['query']['AliUids.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
    public function withInstanceTypes(array $instanceTypes)
    {
        $this->data['InstanceTypes'] = $instanceTypes;
        foreach ($instanceTypes as $i => $iValue) {
            $this->options['query']['InstanceTypes.' . ($i + 1)] = $iValue;
        }

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
     * @param array $publicIpAddresses
     *
     * @return $this
     */
    public function withPublicIpAddresses(array $publicIpAddresses)
    {
        $this->data['PublicIpAddresses'] = $publicIpAddresses;
        foreach ($publicIpAddresses as $i => $iValue) {
            $this->options['query']['PublicIpAddresses.' . ($i + 1)] = $iValue;
        }

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
}

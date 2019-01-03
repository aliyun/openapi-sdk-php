<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ConfigNetwork
 *
 * @method string getVSwitchId()
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 * @method string getSourceIp()
 * @method string getVpcId()
 * @method string getIp()
 */
class ConfigNetwork extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'hsm';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'ConfigNetwork';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'hsm';

    /**
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        return $this->withVSwitchId($vSwitchId);
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVpcId() instead.
     *
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        return $this->withVpcId($vpcId);
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function withVpcId($vpcId)
    {
        $this->data['VpcId'] = $vpcId;
        $this->options['query']['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIp() instead.
     *
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        return $this->withIp($ip);
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function withIp($ip)
    {
        $this->data['Ip'] = $ip;
        $this->options['query']['Ip'] = $ip;

        return $this;
    }
}

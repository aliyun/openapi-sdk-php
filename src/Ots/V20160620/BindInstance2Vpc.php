<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BindInstance2Vpc
 *
 * @method string getAccessKeyId()
 * @method string getInstanceVpcName()
 * @method string getResourceOwnerId()
 * @method string getInstanceName()
 * @method string getVpcId()
 * @method string getVirtualSwitchId()
 * @method string getRegionNo()
 * @method string getNetwork()
 */
class BindInstance2Vpc extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ots';

    /**
     * @var string
     */
    public $version = '2016-06-20';

    /**
     * @var string
     */
    public $action = 'BindInstance2Vpc';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ots';

    /**
     * @deprecated deprecated since version 2.0, Use getAccessKeyId() instead.
     *
     * @return string
     */
    public function getaccess_key_id()
    {
        return $this->getAccessKeyId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAccessKeyId() instead.
     *
     * @param string $access_key_id
     *
     * @return $this
     */
    public function setaccess_key_id($access_key_id)
    {
        return $this->withAccessKeyId($access_key_id);
    }

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
     * @deprecated deprecated since version 2.0, Use withInstanceVpcName() instead.
     *
     * @param string $instanceVpcName
     *
     * @return $this
     */
    public function setInstanceVpcName($instanceVpcName)
    {
        return $this->withInstanceVpcName($instanceVpcName);
    }

    /**
     * @param string $instanceVpcName
     *
     * @return $this
     */
    public function withInstanceVpcName($instanceVpcName)
    {
        $this->data['InstanceVpcName'] = $instanceVpcName;
        $this->options['query']['InstanceVpcName'] = $instanceVpcName;

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
     * @deprecated deprecated since version 2.0, Use withInstanceName() instead.
     *
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        return $this->withInstanceName($instanceName);
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function withInstanceName($instanceName)
    {
        $this->data['InstanceName'] = $instanceName;
        $this->options['query']['InstanceName'] = $instanceName;

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
     * @deprecated deprecated since version 2.0, Use withVirtualSwitchId() instead.
     *
     * @param string $virtualSwitchId
     *
     * @return $this
     */
    public function setVirtualSwitchId($virtualSwitchId)
    {
        return $this->withVirtualSwitchId($virtualSwitchId);
    }

    /**
     * @param string $virtualSwitchId
     *
     * @return $this
     */
    public function withVirtualSwitchId($virtualSwitchId)
    {
        $this->data['VirtualSwitchId'] = $virtualSwitchId;
        $this->options['query']['VirtualSwitchId'] = $virtualSwitchId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRegionNo() instead.
     *
     * @param string $regionNo
     *
     * @return $this
     */
    public function setRegionNo($regionNo)
    {
        return $this->withRegionNo($regionNo);
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function withRegionNo($regionNo)
    {
        $this->data['RegionNo'] = $regionNo;
        $this->options['query']['RegionNo'] = $regionNo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNetwork() instead.
     *
     * @param string $network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        return $this->withNetwork($network);
    }

    /**
     * @param string $network
     *
     * @return $this
     */
    public function withNetwork($network)
    {
        $this->data['Network'] = $network;
        $this->options['query']['Network'] = $network;

        return $this;
    }
}

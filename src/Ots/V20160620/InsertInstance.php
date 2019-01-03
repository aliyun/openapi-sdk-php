<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InsertInstance
 *
 * @method string getAccessKeyId()
 * @method string getClusterType()
 * @method string getResourceOwnerId()
 * @method string getInstanceName()
 * @method string getDescription()
 * @method array getTagInfo()
 * @method string getNetwork()
 */
class InsertInstance extends RpcRequest
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
    public $action = 'InsertInstance';

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
     * @deprecated deprecated since version 2.0, Use withClusterType() instead.
     *
     * @param string $clusterType
     *
     * @return $this
     */
    public function setClusterType($clusterType)
    {
        return $this->withClusterType($clusterType);
    }

    /**
     * @param string $clusterType
     *
     * @return $this
     */
    public function withClusterType($clusterType)
    {
        $this->data['ClusterType'] = $clusterType;
        $this->options['query']['ClusterType'] = $clusterType;

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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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

    /**
     * @deprecated deprecated since version 2.0, Use getTagInfo() instead.
     *
     * @return array
     */
    public function getTagInfos()
    {
        return $this->getTagInfo();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagInfo() instead.
     *
     * @param array $tagInfos
     *
     * @return $this
     */
    public function setTagInfos(array $tagInfos)
    {
        return $this->withTagInfo($tagInfos);
    }

    /**
     * @param array $tagInfo
     *
     * @return $this
     */
    public function withTagInfo(array $tagInfo)
    {
        $this->data['TagInfo'] = $tagInfo;
        foreach ($tagInfo as $i => $iValue) {
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagValue'] = $tagInfo[$i]['TagValue'];
            $this->options['query']['TagInfo.' . ($i + 1) . '.TagKey'] = $tagInfo[$i]['TagKey'];
        }

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

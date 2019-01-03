<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ConfigWhiteList
 *
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 * @method string getSourceIp()
 * @method string getWhiteList()
 */
class ConfigWhiteList extends RpcRequest
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
    public $action = 'ConfigWhiteList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'hsm';

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
     * @deprecated deprecated since version 2.0, Use withWhiteList() instead.
     *
     * @param string $whiteList
     *
     * @return $this
     */
    public function setWhiteList($whiteList)
    {
        return $this->withWhiteList($whiteList);
    }

    /**
     * @param string $whiteList
     *
     * @return $this
     */
    public function withWhiteList($whiteList)
    {
        $this->data['WhiteList'] = $whiteList;
        $this->options['query']['WhiteList'] = $whiteList;

        return $this;
    }
}

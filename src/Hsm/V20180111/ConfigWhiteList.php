<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Rpc;

/**
 * Api ConfigWhiteList
 *
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 * @method string getSourceIp()
 * @method string getWhiteList()
 */
class ConfigWhiteList extends Rpc
{
    public $product = 'hsm';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'hsm';

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

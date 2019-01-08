<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ReleaseInstance
 *
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 */
class ReleaseInstance extends RpcRequest
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
    public $action = 'ReleaseInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
}

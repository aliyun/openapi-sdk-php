<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeCustomLogConfig
 *
 * @method string getOwnerId()
 * @method string getConfigId()
 */
class DescribeCustomLogConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'DescribeCustomLogConfig';

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $configId
     *
     * @return $this
     */
    public function withConfigId($configId)
    {
        $this->data['ConfigId'] = $configId;
        $this->options['query']['ConfigId'] = $configId;

        return $this;
    }
}

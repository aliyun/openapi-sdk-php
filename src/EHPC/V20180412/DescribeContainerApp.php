<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeContainerApp
 *
 * @method string getContainerId()
 */
class DescribeContainerApp extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'DescribeContainerApp';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withContainerId() instead.
     *
     * @param string $containerId
     *
     * @return $this
     */
    public function setContainerId($containerId)
    {
        return $this->withContainerId($containerId);
    }

    /**
     * @param string $containerId
     *
     * @return $this
     */
    public function withContainerId($containerId)
    {
        $this->data['ContainerId'] = $containerId;
        $this->options['query']['ContainerId'] = $containerId;

        return $this;
    }
}

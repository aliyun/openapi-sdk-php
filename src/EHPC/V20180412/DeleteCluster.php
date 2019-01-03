<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCluster
 *
 * @method string getReleaseInstance()
 * @method string getClusterId()
 */
class DeleteCluster extends RpcRequest
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
    public $action = 'DeleteCluster';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withReleaseInstance() instead.
     *
     * @param string $releaseInstance
     *
     * @return $this
     */
    public function setReleaseInstance($releaseInstance)
    {
        return $this->withReleaseInstance($releaseInstance);
    }

    /**
     * @param string $releaseInstance
     *
     * @return $this
     */
    public function withReleaseInstance($releaseInstance)
    {
        $this->data['ReleaseInstance'] = $releaseInstance;
        $this->options['query']['ReleaseInstance'] = $releaseInstance;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }
}

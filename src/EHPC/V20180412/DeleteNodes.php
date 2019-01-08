<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteNodes
 *
 * @method string getReleaseInstance()
 * @method array getInstance()
 * @method string getClusterId()
 */
class DeleteNodes extends RpcRequest
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
    public $action = 'DeleteNodes';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

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
     * @param array $instance
     *
     * @return $this
     */
    public function withInstance(array $instance)
    {
        $this->data['Instance'] = $instance;
        foreach ($instance as $i => $iValue) {
            $this->options['query']['Instance.' . ($i + 1) . '.Id'] = $instance[$i]['Id'];
        }

        return $this;
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

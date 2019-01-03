<?php

namespace AlibabaCloud\TeslaStream\V20180115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchGetPluginConfigInfo
 *
 * @method string getPluginInfos()
 */
class BatchGetPluginConfigInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'TeslaStream';

    /**
     * @var string
     */
    public $version = '2018-01-15';

    /**
     * @var string
     */
    public $action = 'BatchGetPluginConfigInfo';

    /**
     * @deprecated deprecated since version 2.0, Use withPluginInfos() instead.
     *
     * @param string $pluginInfos
     *
     * @return $this
     */
    public function setPluginInfos($pluginInfos)
    {
        return $this->withPluginInfos($pluginInfos);
    }

    /**
     * @param string $pluginInfos
     *
     * @return $this
     */
    public function withPluginInfos($pluginInfos)
    {
        $this->data['PluginInfos'] = $pluginInfos;
        $this->options['query']['PluginInfos'] = $pluginInfos;

        return $this;
    }
}

<?php

namespace AlibabaCloud\TeslaStream\V20180115;

use AlibabaCloud\Rpc;

/**
 * Api BatchGetPluginConfigInfo
 *
 * @method string getPluginInfos()
 */
class BatchGetPluginConfigInfo extends Rpc
{
    public $product = 'TeslaStream';

    public $version = '2018-01-15';

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

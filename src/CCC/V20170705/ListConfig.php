<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListConfig
 *
 * @method string getInstanceId()
 * @method array getConfigItem()
 */
class ListConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'ListConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

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
     * @param array $configItem
     *
     * @return $this
     */
    public function withConfigItem(array $configItem)
    {
        $this->data['ConfigItem'] = $configItem;
        foreach ($configItem as $i => $iValue) {
            $this->options['query']['ConfigItem.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

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
     * @deprecated deprecated since version 2.0, Use getConfigItem() instead.
     *
     * @return array
     */
    public function getConfigItems()
    {
        return $this->getConfigItem();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withConfigItem() instead.
     *
     * @param array $configItems
     *
     * @return $this
     */
    public function setConfigItems(array $configItems)
    {
        return $this->withConfigItem($configItems);
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

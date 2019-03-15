<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getConfigItem()
 */
class ListConfig extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

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

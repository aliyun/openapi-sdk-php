<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api QueryDevicesByAlias
 *
 * @method string getAlias()
 * @method string getAppKey()
 */
class QueryDevicesByAlias extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';

    /**
     * @param string $alias
     *
     * @return $this
     */
    public function withAlias($alias)
    {
        $this->data['Alias'] = $alias;
        $this->options['query']['Alias'] = $alias;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function withAppKey($appKey)
    {
        $this->data['AppKey'] = $appKey;
        $this->options['query']['AppKey'] = $appKey;

        return $this;
    }
}

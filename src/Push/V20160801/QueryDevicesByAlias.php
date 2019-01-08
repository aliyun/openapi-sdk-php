<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryDevicesByAlias
 *
 * @method string getAlias()
 * @method string getAppKey()
 */
class QueryDevicesByAlias extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Push';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'QueryDevicesByAlias';

    /**
     * @var string
     */
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

<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryDevicesByAccount
 *
 * @method string getAppKey()
 * @method string getAccount()
 */
class QueryDevicesByAccount extends RpcRequest
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
    public $action = 'QueryDevicesByAccount';

    /**
     * @var string
     */
    public $method = 'POST';

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

    /**
     * @param string $account
     *
     * @return $this
     */
    public function withAccount($account)
    {
        $this->data['Account'] = $account;
        $this->options['query']['Account'] = $account;

        return $this;
    }
}

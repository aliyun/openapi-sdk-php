<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * Api QueryDevicesByAccount
 *
 * @method string getAppKey()
 * @method string getAccount()
 */
class QueryDevicesByAccount extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

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

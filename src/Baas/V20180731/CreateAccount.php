<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api CreateAccount
 *
 * @method string getAccountPubKey()
 * @method string getBizid()
 * @method string getAccount()
 * @method string getAccountRecoverPubKey()
 */
class CreateAccount extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';

    /**
     * @param string $accountPubKey
     *
     * @return $this
     */
    public function withAccountPubKey($accountPubKey)
    {
        $this->data['AccountPubKey'] = $accountPubKey;
        $this->options['query']['AccountPubKey'] = $accountPubKey;

        return $this;
    }

    /**
     * @param string $bizid
     *
     * @return $this
     */
    public function withBizid($bizid)
    {
        $this->data['Bizid'] = $bizid;
        $this->options['query']['Bizid'] = $bizid;

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

    /**
     * @param string $accountRecoverPubKey
     *
     * @return $this
     */
    public function withAccountRecoverPubKey($accountRecoverPubKey)
    {
        $this->data['AccountRecoverPubKey'] = $accountRecoverPubKey;
        $this->options['query']['AccountRecoverPubKey'] = $accountRecoverPubKey;

        return $this;
    }
}

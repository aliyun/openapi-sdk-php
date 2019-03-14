<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api ApplyBlockchain
 *
 * @method string getBlockchain()
 * @method string getAccountPubKey()
 * @method string getUploadReq()
 * @method string getAccountRecoverPubKey()
 * @method string getAccount()
 */
class ApplyBlockchain extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param string $blockchain
     *
     * @return $this
     */
    public function withBlockchain($blockchain)
    {
        $this->data['Blockchain'] = $blockchain;
        $this->options['query']['Blockchain'] = $blockchain;

        return $this;
    }

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
     * @param string $uploadReq
     *
     * @return $this
     */
    public function withUploadReq($uploadReq)
    {
        $this->data['UploadReq'] = $uploadReq;
        $this->options['query']['UploadReq'] = $uploadReq;

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

<?php

namespace AlibabaCloud\YqBridge\V20170810;

use AlibabaCloud\Rpc;

/**
 * Api ResetAccountPwdInWhiteList
 *
 * @method string getUid()
 * @method string getPassword()
 */
class ResetAccountPwdInWhiteList extends Rpc
{
    public $product = 'YqBridge';

    public $version = '2017-08-10';

    public $method = 'POST';

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function withUid($uid)
    {
        $this->data['Uid'] = $uid;
        $this->options['query']['Uid'] = $uid;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

        return $this;
    }
}

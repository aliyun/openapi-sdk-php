<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CheckAccountAndPasswordRisk
 *
 * @method string getAccountName()
 * @method string getPasswordHash()
 * @method string getCallerName()
 */
class CheckAccountAndPasswordRisk extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'jaq';

    /**
     * @var string
     */
    public $version = '2016-11-23';

    /**
     * @var string
     */
    public $action = 'CheckAccountAndPasswordRisk';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $accountName
     *
     * @return $this
     */
    public function withAccountName($accountName)
    {
        $this->data['AccountName'] = $accountName;
        $this->options['query']['AccountName'] = $accountName;

        return $this;
    }

    /**
     * @param string $passwordHash
     *
     * @return $this
     */
    public function withPasswordHash($passwordHash)
    {
        $this->data['PasswordHash'] = $passwordHash;
        $this->options['query']['PasswordHash'] = $passwordHash;

        return $this;
    }

    /**
     * @param string $callerName
     *
     * @return $this
     */
    public function withCallerName($callerName)
    {
        $this->data['CallerName'] = $callerName;
        $this->options['query']['CallerName'] = $callerName;

        return $this;
    }
}

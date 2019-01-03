<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetAccountAlias
 *
 * @method string getAccountAlias()
 */
class SetAccountAlias extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ram';

    /**
     * @var string
     */
    public $version = '2015-05-01';

    /**
     * @var string
     */
    public $action = 'SetAccountAlias';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withAccountAlias() instead.
     *
     * @param string $accountAlias
     *
     * @return $this
     */
    public function setAccountAlias($accountAlias)
    {
        return $this->withAccountAlias($accountAlias);
    }

    /**
     * @param string $accountAlias
     *
     * @return $this
     */
    public function withAccountAlias($accountAlias)
    {
        $this->data['AccountAlias'] = $accountAlias;
        $this->options['query']['AccountAlias'] = $accountAlias;

        return $this;
    }
}

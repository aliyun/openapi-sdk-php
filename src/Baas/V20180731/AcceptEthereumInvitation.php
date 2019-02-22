<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AcceptEthereumInvitation
 *
 * @method string getCode()
 * @method string getToken()
 */
class AcceptEthereumInvitation extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'AcceptEthereumInvitation';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $code
     *
     * @return $this
     */
    public function withCode($code)
    {
        $this->data['Code'] = $code;
        $this->options['query']['Code'] = $code;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function withToken($token)
    {
        $this->data['Token'] = $token;
        $this->options['query']['Token'] = $token;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AuthenticateSig
 *
 * @method string getSig()
 * @method string getRemoteIp()
 * @method string getSourceIp()
 * @method string getAppKey()
 * @method string getSessionId()
 * @method string getToken()
 * @method string getScene()
 */
class AuthenticateSig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'afs';

    /**
     * @var string
     */
    public $version = '2018-01-12';

    /**
     * @var string
     */
    public $action = 'AuthenticateSig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $sig
     *
     * @return $this
     */
    public function withSig($sig)
    {
        $this->data['Sig'] = $sig;
        $this->options['query']['Sig'] = $sig;

        return $this;
    }

    /**
     * @param string $remoteIp
     *
     * @return $this
     */
    public function withRemoteIp($remoteIp)
    {
        $this->data['RemoteIp'] = $remoteIp;
        $this->options['query']['RemoteIp'] = $remoteIp;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

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

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function withSessionId($sessionId)
    {
        $this->data['SessionId'] = $sessionId;
        $this->options['query']['SessionId'] = $sessionId;

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

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function withScene($scene)
    {
        $this->data['Scene'] = $scene;
        $this->options['query']['Scene'] = $scene;

        return $this;
    }
}

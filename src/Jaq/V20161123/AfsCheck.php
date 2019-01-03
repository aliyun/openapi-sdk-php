<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AfsCheck
 *
 * @method string getSig()
 * @method string getSession()
 * @method string getCallerName()
 * @method string getPlatform()
 * @method string getToken()
 * @method string getScene()
 */
class AfsCheck extends RpcRequest
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
    public $action = 'AfsCheck';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSig() instead.
     *
     * @param string $sig
     *
     * @return $this
     */
    public function setSig($sig)
    {
        return $this->withSig($sig);
    }

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
     * @deprecated deprecated since version 2.0, Use withSession() instead.
     *
     * @param string $session
     *
     * @return $this
     */
    public function setSession($session)
    {
        return $this->withSession($session);
    }

    /**
     * @param string $session
     *
     * @return $this
     */
    public function withSession($session)
    {
        $this->data['Session'] = $session;
        $this->options['query']['Session'] = $session;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCallerName() instead.
     *
     * @param string $callerName
     *
     * @return $this
     */
    public function setCallerName($callerName)
    {
        return $this->withCallerName($callerName);
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

    /**
     * @deprecated deprecated since version 2.0, Use withPlatform() instead.
     *
     * @param string $platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        return $this->withPlatform($platform);
    }

    /**
     * @param string $platform
     *
     * @return $this
     */
    public function withPlatform($platform)
    {
        $this->data['Platform'] = $platform;
        $this->options['query']['Platform'] = $platform;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withToken() instead.
     *
     * @param string $token
     *
     * @return $this
     */
    public function setToken($token)
    {
        return $this->withToken($token);
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
     * @deprecated deprecated since version 2.0, Use withScene() instead.
     *
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        return $this->withScene($scene);
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

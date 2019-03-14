<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\Rpc;

/**
 * Api AfsCheck
 *
 * @method string getSig()
 * @method string getSession()
 * @method string getCallerName()
 * @method string getPlatform()
 * @method string getToken()
 * @method string getScene()
 */
class AfsCheck extends Rpc
{
    public $product = 'jaq';

    public $version = '2016-11-23';

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

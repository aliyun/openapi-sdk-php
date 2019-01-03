<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AfsAppCheck
 *
 * @method string getSession()
 * @method string getCallerName()
 */
class AfsAppCheck extends RpcRequest
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
    public $action = 'AfsAppCheck';

    /**
     * @var string
     */
    public $method = 'POST';

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
}

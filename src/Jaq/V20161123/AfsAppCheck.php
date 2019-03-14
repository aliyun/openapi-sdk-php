<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\Rpc;

/**
 * Api AfsAppCheck
 *
 * @method string getSession()
 * @method string getCallerName()
 */
class AfsAppCheck extends Rpc
{
    public $product = 'jaq';

    public $version = '2016-11-23';

    public $method = 'POST';

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
}

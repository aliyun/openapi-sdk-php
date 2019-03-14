<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * Api SetAccountAlias
 *
 * @method string getAccountAlias()
 */
class SetAccountAlias extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';

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

<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api DeleteCredentialsList
 *
 * @method string getData()
 * @method string getIgnoreDauth()
 * @method string getForce()
 */
class DeleteCredentialsList extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

    public $method = 'POST';

    /**
     * @param string $data
     *
     * @return $this
     */
    public function withData($data)
    {
        $this->data['Data'] = $data;
        $this->options['query']['Data'] = $data;

        return $this;
    }

    /**
     * @param string $ignoreDauth
     *
     * @return $this
     */
    public function withIgnoreDauth($ignoreDauth)
    {
        $this->data['IgnoreDauth'] = $ignoreDauth;
        $this->options['query']['IgnoreDauth'] = $ignoreDauth;

        return $this;
    }

    /**
     * @param string $force
     *
     * @return $this
     */
    public function withForce($force)
    {
        $this->data['Force'] = $force;
        $this->options['query']['Force'] = $force;

        return $this;
    }
}

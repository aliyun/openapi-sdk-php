<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCredentialsList
 *
 * @method string getData()
 * @method string getIgnoreDauth()
 * @method string getForce()
 */
class DeleteCredentialsList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'DeleteCredentialsList';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
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

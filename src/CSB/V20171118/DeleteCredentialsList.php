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
     * @deprecated deprecated since version 2.0, Use withData() instead.
     *
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        return $this->withData($data);
    }

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
     * @deprecated deprecated since version 2.0, Use withIgnoreDauth() instead.
     *
     * @param string $ignoreDauth
     *
     * @return $this
     */
    public function setIgnoreDauth($ignoreDauth)
    {
        return $this->withIgnoreDauth($ignoreDauth);
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
     * @deprecated deprecated since version 2.0, Use withForce() instead.
     *
     * @param string $force
     *
     * @return $this
     */
    public function setForce($force)
    {
        return $this->withForce($force);
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

<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api UpdateEthereumClientUserPassword
 *
 * @method string getPassword()
 * @method string getNodeId()
 * @method string getUsername()
 */
class UpdateEthereumClientUserPassword extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

        return $this;
    }

    /**
     * @param string $nodeId
     *
     * @return $this
     */
    public function withNodeId($nodeId)
    {
        $this->data['NodeId'] = $nodeId;
        $this->options['query']['NodeId'] = $nodeId;

        return $this;
    }

    /**
     * @param string $username
     *
     * @return $this
     */
    public function withUsername($username)
    {
        $this->data['Username'] = $username;
        $this->options['query']['Username'] = $username;

        return $this;
    }
}

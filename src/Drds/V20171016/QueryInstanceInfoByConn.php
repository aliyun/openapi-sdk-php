<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryInstanceInfoByConn
 *
 * @method string getPort()
 * @method string getHost()
 * @method string getUserName()
 */
class QueryInstanceInfoByConn extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Drds';

    /**
     * @var string
     */
    public $version = '2017-10-16';

    /**
     * @var string
     */
    public $action = 'QueryInstanceInfoByConn';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $port
     *
     * @return $this
     */
    public function withPort($port)
    {
        $this->data['Port'] = $port;
        $this->options['query']['Port'] = $port;

        return $this;
    }

    /**
     * @param string $host
     *
     * @return $this
     */
    public function withHost($host)
    {
        $this->data['Host'] = $host;
        $this->options['query']['Host'] = $host;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function withUserName($userName)
    {
        $this->data['UserName'] = $userName;
        $this->options['query']['UserName'] = $userName;

        return $this;
    }
}

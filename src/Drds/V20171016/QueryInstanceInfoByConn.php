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
     * @deprecated deprecated since version 2.0, Use withPort() instead.
     *
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        return $this->withPort($port);
    }

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
     * @deprecated deprecated since version 2.0, Use withHost() instead.
     *
     * @param string $host
     *
     * @return $this
     */
    public function setHost($host)
    {
        return $this->withHost($host);
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
     * @deprecated deprecated since version 2.0, Use withUserName() instead.
     *
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        return $this->withUserName($userName);
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

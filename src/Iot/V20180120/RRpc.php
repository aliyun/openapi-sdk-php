<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RRpc
 *
 * @method string getRequestBase64Byte()
 * @method string getTopic()
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getTimeout()
 */
class RRpc extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'RRpc';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withRequestBase64Byte() instead.
     *
     * @param string $requestBase64Byte
     *
     * @return $this
     */
    public function setRequestBase64Byte($requestBase64Byte)
    {
        return $this->withRequestBase64Byte($requestBase64Byte);
    }

    /**
     * @param string $requestBase64Byte
     *
     * @return $this
     */
    public function withRequestBase64Byte($requestBase64Byte)
    {
        $this->data['RequestBase64Byte'] = $requestBase64Byte;
        $this->options['query']['RequestBase64Byte'] = $requestBase64Byte;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTopic() instead.
     *
     * @param string $topic
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        return $this->withTopic($topic);
    }

    /**
     * @param string $topic
     *
     * @return $this
     */
    public function withTopic($topic)
    {
        $this->data['Topic'] = $topic;
        $this->options['query']['Topic'] = $topic;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeviceName() instead.
     *
     * @param string $deviceName
     *
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        return $this->withDeviceName($deviceName);
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function withDeviceName($deviceName)
    {
        $this->data['DeviceName'] = $deviceName;
        $this->options['query']['DeviceName'] = $deviceName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProductKey() instead.
     *
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        return $this->withProductKey($productKey);
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function withProductKey($productKey)
    {
        $this->data['ProductKey'] = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTimeout() instead.
     *
     * @param string $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        return $this->withTimeout($timeout);
    }

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function withTimeout($timeout)
    {
        $this->data['Timeout'] = $timeout;
        $this->options['query']['Timeout'] = $timeout;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryLiveStreaming
 *
 * @method string getIotId()
 * @method string getStreamType()
 * @method string getShouldEncrypt()
 * @method string getEncryptType()
 */
class QueryLiveStreaming extends RpcRequest
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
    public $action = 'QueryLiveStreaming';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withIotId() instead.
     *
     * @param string $iotId
     *
     * @return $this
     */
    public function setIotId($iotId)
    {
        return $this->withIotId($iotId);
    }

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function withIotId($iotId)
    {
        $this->data['IotId'] = $iotId;
        $this->options['query']['IotId'] = $iotId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStreamType() instead.
     *
     * @param string $streamType
     *
     * @return $this
     */
    public function setStreamType($streamType)
    {
        return $this->withStreamType($streamType);
    }

    /**
     * @param string $streamType
     *
     * @return $this
     */
    public function withStreamType($streamType)
    {
        $this->data['StreamType'] = $streamType;
        $this->options['query']['StreamType'] = $streamType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withShouldEncrypt() instead.
     *
     * @param string $shouldEncrypt
     *
     * @return $this
     */
    public function setShouldEncrypt($shouldEncrypt)
    {
        return $this->withShouldEncrypt($shouldEncrypt);
    }

    /**
     * @param string $shouldEncrypt
     *
     * @return $this
     */
    public function withShouldEncrypt($shouldEncrypt)
    {
        $this->data['ShouldEncrypt'] = $shouldEncrypt;
        $this->options['query']['ShouldEncrypt'] = $shouldEncrypt;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEncryptType() instead.
     *
     * @param string $encryptType
     *
     * @return $this
     */
    public function setEncryptType($encryptType)
    {
        return $this->withEncryptType($encryptType);
    }

    /**
     * @param string $encryptType
     *
     * @return $this
     */
    public function withEncryptType($encryptType)
    {
        $this->data['EncryptType'] = $encryptType;
        $this->options['query']['EncryptType'] = $encryptType;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
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
     * @param string $iotId
     *
     * @return $this
     */
    public function withIotId($iotId)
    {
        $this->data['IotId']             = $iotId;
        $this->options['query']['IotId'] = $iotId;

        return $this;
    }

    /**
     * @param string $streamType
     *
     * @return $this
     */
    public function withStreamType($streamType)
    {
        $this->data['StreamType']             = $streamType;
        $this->options['query']['StreamType'] = $streamType;

        return $this;
    }

    /**
     * @param string $shouldEncrypt
     *
     * @return $this
     */
    public function withShouldEncrypt($shouldEncrypt)
    {
        $this->data['ShouldEncrypt']             = $shouldEncrypt;
        $this->options['query']['ShouldEncrypt'] = $shouldEncrypt;

        return $this;
    }

    /**
     * @param string $encryptType
     *
     * @return $this
     */
    public function withEncryptType($encryptType)
    {
        $this->data['EncryptType']             = $encryptType;
        $this->options['query']['EncryptType'] = $encryptType;

        return $this;
    }
}

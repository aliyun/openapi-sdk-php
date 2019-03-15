<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getIotId()
 * @method string getCaptureId()
 * @method string getPictureType()
 */
class QueryDevicePictureFile extends RpcRequest
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
    public $action = 'QueryDevicePictureFile';

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
     * @param string $captureId
     *
     * @return $this
     */
    public function withCaptureId($captureId)
    {
        $this->data['CaptureId']             = $captureId;
        $this->options['query']['CaptureId'] = $captureId;

        return $this;
    }

    /**
     * @param string $pictureType
     *
     * @return $this
     */
    public function withPictureType($pictureType)
    {
        $this->data['PictureType']             = $pictureType;
        $this->options['query']['PictureType'] = $pictureType;

        return $this;
    }
}

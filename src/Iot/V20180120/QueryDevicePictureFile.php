<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryDevicePictureFile
 *
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
     * @deprecated deprecated since version 2.0, Use withCaptureId() instead.
     *
     * @param string $captureId
     *
     * @return $this
     */
    public function setCaptureId($captureId)
    {
        return $this->withCaptureId($captureId);
    }

    /**
     * @param string $captureId
     *
     * @return $this
     */
    public function withCaptureId($captureId)
    {
        $this->data['CaptureId'] = $captureId;
        $this->options['query']['CaptureId'] = $captureId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPictureType() instead.
     *
     * @param string $pictureType
     *
     * @return $this
     */
    public function setPictureType($pictureType)
    {
        return $this->withPictureType($pictureType);
    }

    /**
     * @param string $pictureType
     *
     * @return $this
     */
    public function withPictureType($pictureType)
    {
        $this->data['PictureType'] = $pictureType;
        $this->options['query']['PictureType'] = $pictureType;

        return $this;
    }
}

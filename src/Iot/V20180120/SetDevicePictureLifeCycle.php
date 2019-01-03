<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDevicePictureLifeCycle
 *
 * @method string getIotId()
 * @method string getDay()
 */
class SetDevicePictureLifeCycle extends RpcRequest
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
    public $action = 'SetDevicePictureLifeCycle';

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
     * @deprecated deprecated since version 2.0, Use withDay() instead.
     *
     * @param string $day
     *
     * @return $this
     */
    public function setDay($day)
    {
        return $this->withDay($day);
    }

    /**
     * @param string $day
     *
     * @return $this
     */
    public function withDay($day)
    {
        $this->data['Day'] = $day;
        $this->options['query']['Day'] = $day;

        return $this;
    }
}

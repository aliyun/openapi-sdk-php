<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDeviceStorageLifeCycle
 *
 * @method string getIotId()
 * @method string getLifeCycle()
 */
class SetDeviceStorageLifeCycle extends RpcRequest
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
    public $action = 'SetDeviceStorageLifeCycle';

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
     * @deprecated deprecated since version 2.0, Use withLifeCycle() instead.
     *
     * @param string $lifeCycle
     *
     * @return $this
     */
    public function setLifeCycle($lifeCycle)
    {
        return $this->withLifeCycle($lifeCycle);
    }

    /**
     * @param string $lifeCycle
     *
     * @return $this
     */
    public function withLifeCycle($lifeCycle)
    {
        $this->data['LifeCycle'] = $lifeCycle;
        $this->options['query']['LifeCycle'] = $lifeCycle;

        return $this;
    }
}

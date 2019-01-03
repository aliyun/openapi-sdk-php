<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SyncFacePictures
 *
 * @method string getIotId()
 * @method string getGroupId()
 * @method string getDeviceName()
 * @method string getProductKey()
 */
class SyncFacePictures extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'LinkFace';

    /**
     * @var string
     */
    public $version = '2018-07-20';

    /**
     * @var string
     */
    public $action = 'SyncFacePictures';

    /**
     * @var string
     */
    public $scheme = 'https';


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
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

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
}

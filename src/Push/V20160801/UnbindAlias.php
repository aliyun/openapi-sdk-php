<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UnbindAlias
 *
 * @method string getAliasName()
 * @method string getAppKey()
 * @method string getDeviceId()
 * @method string getUnbindAll()
 */
class UnbindAlias extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Push';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'UnbindAlias';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withAliasName() instead.
     *
     * @param string $aliasName
     *
     * @return $this
     */
    public function setAliasName($aliasName)
    {
        return $this->withAliasName($aliasName);
    }

    /**
     * @param string $aliasName
     *
     * @return $this
     */
    public function withAliasName($aliasName)
    {
        $this->data['AliasName'] = $aliasName;
        $this->options['query']['AliasName'] = $aliasName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAppKey() instead.
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        return $this->withAppKey($appKey);
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function withAppKey($appKey)
    {
        $this->data['AppKey'] = $appKey;
        $this->options['query']['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeviceId() instead.
     *
     * @param string $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        return $this->withDeviceId($deviceId);
    }

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function withDeviceId($deviceId)
    {
        $this->data['DeviceId'] = $deviceId;
        $this->options['query']['DeviceId'] = $deviceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUnbindAll() instead.
     *
     * @param string $unbindAll
     *
     * @return $this
     */
    public function setUnbindAll($unbindAll)
    {
        return $this->withUnbindAll($unbindAll);
    }

    /**
     * @param string $unbindAll
     *
     * @return $this
     */
    public function withUnbindAll($unbindAll)
    {
        $this->data['UnbindAll'] = $unbindAll;
        $this->options['query']['UnbindAll'] = $unbindAll;

        return $this;
    }
}

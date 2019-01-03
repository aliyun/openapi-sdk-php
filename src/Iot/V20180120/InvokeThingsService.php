<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InvokeThingsService
 *
 * @method string getArgs()
 * @method string getIdentifier()
 * @method array getDeviceName()
 * @method string getProductKey()
 */
class InvokeThingsService extends RpcRequest
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
    public $action = 'InvokeThingsService';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withArgs() instead.
     *
     * @param string $args
     *
     * @return $this
     */
    public function setArgs($args)
    {
        return $this->withArgs($args);
    }

    /**
     * @param string $args
     *
     * @return $this
     */
    public function withArgs($args)
    {
        $this->data['Args'] = $args;
        $this->options['query']['Args'] = $args;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIdentifier() instead.
     *
     * @param string $identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        return $this->withIdentifier($identifier);
    }

    /**
     * @param string $identifier
     *
     * @return $this
     */
    public function withIdentifier($identifier)
    {
        $this->data['Identifier'] = $identifier;
        $this->options['query']['Identifier'] = $identifier;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getDeviceName() instead.
     *
     * @return array
     */
    public function getDeviceNames()
    {
        return $this->getDeviceName();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeviceName() instead.
     *
     * @param array $deviceNames
     *
     * @return $this
     */
    public function setDeviceNames(array $deviceNames)
    {
        return $this->withDeviceName($deviceNames);
    }

    /**
     * @param array $deviceName
     *
     * @return $this
     */
    public function withDeviceName(array $deviceName)
    {
        $this->data['DeviceName'] = $deviceName;
        foreach ($deviceName as $i => $iValue) {
            $this->options['query']['DeviceName.' . ($i + 1)] = $iValue;
        }

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

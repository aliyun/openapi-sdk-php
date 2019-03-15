<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getName()
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getTags()
 */
class CreateEdgeInstance extends RpcRequest
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
    public $action = 'CreateEdgeInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name']             = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function withDeviceName($deviceName)
    {
        $this->data['DeviceName']             = $deviceName;
        $this->options['query']['DeviceName'] = $deviceName;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function withProductKey($productKey)
    {
        $this->data['ProductKey']             = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags']             = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }
}

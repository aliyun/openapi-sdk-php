<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchRegisterDevice
 *
 * @method string getCount()
 * @method string getProductKey()
 */
class BatchRegisterDevice extends RpcRequest
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
    public $action = 'BatchRegisterDevice';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $count
     *
     * @return $this
     */
    public function withCount($count)
    {
        $this->data['Count'] = $count;
        $this->options['query']['Count'] = $count;

        return $this;
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

<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api DeleteProductTags
 *
 * @method string getIotInstanceId()
 * @method array getProductTagKey()
 * @method string getProductKey()
 */
class DeleteProductTags extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function withIotInstanceId($iotInstanceId)
    {
        $this->data['IotInstanceId'] = $iotInstanceId;
        $this->options['query']['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param array $productTagKey
     *
     * @return $this
     */
    public function withProductTagKey(array $productTagKey)
    {
        $this->data['ProductTagKey'] = $productTagKey;
        foreach ($productTagKey as $i => $iValue) {
            $this->options['query']['ProductTagKey.' . ($i + 1)] = $iValue;
        }

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

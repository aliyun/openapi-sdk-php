<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method array getProductTagKey()
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class DeleteProductTags extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';

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
}

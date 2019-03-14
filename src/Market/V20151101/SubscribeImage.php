<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * Api SubscribeImage
 *
 * @method string getProductCode()
 */
class SubscribeImage extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function withProductCode($productCode)
    {
        $this->data['ProductCode'] = $productCode;
        $this->options['query']['ProductCode'] = $productCode;

        return $this;
    }
}

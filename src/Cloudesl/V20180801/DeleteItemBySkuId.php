<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * Api DeleteItemBySkuId
 *
 * @method string getStoreId()
 * @method string getSkuId()
 */
class DeleteItemBySkuId extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function withStoreId($storeId)
    {
        $this->data['StoreId'] = $storeId;
        $this->options['query']['StoreId'] = $storeId;

        return $this;
    }

    /**
     * @param string $skuId
     *
     * @return $this
     */
    public function withSkuId($skuId)
    {
        $this->data['SkuId'] = $skuId;
        $this->options['query']['SkuId'] = $skuId;

        return $this;
    }
}

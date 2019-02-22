<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteItemBySkuId
 *
 * @method string getStoreId()
 * @method string getSkuId()
 */
class DeleteItemBySkuId extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'cloudesl';

    /**
     * @var string
     */
    public $version = '2018-08-01';

    /**
     * @var string
     */
    public $action = 'DeleteItemBySkuId';

    /**
     * @var string
     */
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

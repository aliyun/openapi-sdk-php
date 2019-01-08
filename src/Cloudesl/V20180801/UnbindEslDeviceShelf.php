<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UnbindEslDeviceShelf
 *
 * @method string getEslBarCode()
 * @method string getStoreId()
 */
class UnbindEslDeviceShelf extends RpcRequest
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
    public $action = 'UnbindEslDeviceShelf';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $eslBarCode
     *
     * @return $this
     */
    public function withEslBarCode($eslBarCode)
    {
        $this->data['EslBarCode'] = $eslBarCode;
        $this->options['query']['EslBarCode'] = $eslBarCode;

        return $this;
    }

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
}

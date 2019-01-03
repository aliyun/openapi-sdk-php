<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BindEslDeviceShelf
 *
 * @method string getShelfCode()
 * @method string getEslBarCode()
 * @method string getStoreId()
 */
class BindEslDeviceShelf extends RpcRequest
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
    public $action = 'BindEslDeviceShelf';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withShelfCode() instead.
     *
     * @param string $shelfCode
     *
     * @return $this
     */
    public function setShelfCode($shelfCode)
    {
        return $this->withShelfCode($shelfCode);
    }

    /**
     * @param string $shelfCode
     *
     * @return $this
     */
    public function withShelfCode($shelfCode)
    {
        $this->data['ShelfCode'] = $shelfCode;
        $this->options['query']['ShelfCode'] = $shelfCode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEslBarCode() instead.
     *
     * @param string $eslBarCode
     *
     * @return $this
     */
    public function setEslBarCode($eslBarCode)
    {
        return $this->withEslBarCode($eslBarCode);
    }

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
     * @deprecated deprecated since version 2.0, Use withStoreId() instead.
     *
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        return $this->withStoreId($storeId);
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

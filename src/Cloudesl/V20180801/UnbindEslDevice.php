<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UnbindEslDevice
 *
 * @method string getEslBarCode()
 * @method string getStoreId()
 * @method string getItemBarCode()
 */
class UnbindEslDevice extends RpcRequest
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
    public $action = 'UnbindEslDevice';

    /**
     * @var string
     */
    public $method = 'POST';

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

    /**
     * @deprecated deprecated since version 2.0, Use withItemBarCode() instead.
     *
     * @param string $itemBarCode
     *
     * @return $this
     */
    public function setItemBarCode($itemBarCode)
    {
        return $this->withItemBarCode($itemBarCode);
    }

    /**
     * @param string $itemBarCode
     *
     * @return $this
     */
    public function withItemBarCode($itemBarCode)
    {
        $this->data['ItemBarCode'] = $itemBarCode;
        $this->options['query']['ItemBarCode'] = $itemBarCode;

        return $this;
    }
}

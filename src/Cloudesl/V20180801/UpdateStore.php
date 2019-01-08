<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateStore
 *
 * @method string getComments()
 * @method string getPhone()
 * @method string getStoreName()
 * @method string getGroups()
 * @method string getOutId()
 * @method string getStoreId()
 * @method string getBrand()
 */
class UpdateStore extends RpcRequest
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
    public $action = 'UpdateStore';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $comments
     *
     * @return $this
     */
    public function withComments($comments)
    {
        $this->data['Comments'] = $comments;
        $this->options['query']['Comments'] = $comments;

        return $this;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function withPhone($phone)
    {
        $this->data['Phone'] = $phone;
        $this->options['query']['Phone'] = $phone;

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $groups
     *
     * @return $this
     */
    public function withGroups($groups)
    {
        $this->data['Groups'] = $groups;
        $this->options['query']['Groups'] = $groups;

        return $this;
    }

    /**
     * @param string $outId
     *
     * @return $this
     */
    public function withOutId($outId)
    {
        $this->data['OutId'] = $outId;
        $this->options['query']['OutId'] = $outId;

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

    /**
     * @param string $brand
     *
     * @return $this
     */
    public function withBrand($brand)
    {
        $this->data['Brand'] = $brand;
        $this->options['query']['Brand'] = $brand;

        return $this;
    }
}

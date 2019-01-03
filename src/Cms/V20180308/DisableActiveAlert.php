<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DisableActiveAlert
 *
 * @method string getProduct()
 * @method string getUserId()
 */
class DisableActiveAlert extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'DisableActiveAlert';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withProduct() instead.
     *
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        return $this->withProduct($product);
    }

    /**
     * @param string $product
     *
     * @return $this
     */
    public function withProduct($product)
    {
        $this->data['Product'] = $product;
        $this->options['query']['Product'] = $product;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserId() instead.
     *
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        return $this->withUserId($userId);
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }
}

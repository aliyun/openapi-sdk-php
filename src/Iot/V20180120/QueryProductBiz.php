<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryProductBiz
 *
 * @method string getProductKey()
 * @method string getBizTenantId()
 */
class QueryProductBiz extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'QueryProductBiz';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withProductKey() instead.
     *
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        return $this->withProductKey($productKey);
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

    /**
     * @deprecated deprecated since version 2.0, Use withBizTenantId() instead.
     *
     * @param string $bizTenantId
     *
     * @return $this
     */
    public function setBizTenantId($bizTenantId)
    {
        return $this->withBizTenantId($bizTenantId);
    }

    /**
     * @param string $bizTenantId
     *
     * @return $this
     */
    public function withBizTenantId($bizTenantId)
    {
        $this->data['BizTenantId'] = $bizTenantId;
        $this->options['query']['BizTenantId'] = $bizTenantId;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
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
     * @param string $productKey
     *
     * @return $this
     */
    public function withProductKey($productKey)
    {
        $this->data['ProductKey']             = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $bizTenantId
     *
     * @return $this
     */
    public function withBizTenantId($bizTenantId)
    {
        $this->data['BizTenantId']             = $bizTenantId;
        $this->options['query']['BizTenantId'] = $bizTenantId;

        return $this;
    }
}

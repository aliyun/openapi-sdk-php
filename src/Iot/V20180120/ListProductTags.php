<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListProductTags
 *
 * @method string getProductKey()
 */
class ListProductTags extends RpcRequest
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
    public $action = 'ListProductTags';

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
        $this->data['ProductKey'] = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }
}

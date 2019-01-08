<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateProductTags
 *
 * @method array getProductTag()
 * @method string getProductKey()
 */
class CreateProductTags extends RpcRequest
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
    public $action = 'CreateProductTags';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $productTag
     *
     * @return $this
     */
    public function withProductTag(array $productTag)
    {
        $this->data['ProductTag'] = $productTag;
        foreach ($productTag as $i => $iValue) {
            $this->options['query']['ProductTag.' . ($i + 1) . '.TagValue'] = $productTag[$i]['TagValue'];
            $this->options['query']['ProductTag.' . ($i + 1) . '.TagKey'] = $productTag[$i]['TagKey'];
        }

        return $this;
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
}

<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method array getProductTag()
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class UpdateProductTags extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

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
}

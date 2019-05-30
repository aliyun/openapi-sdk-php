<?php

namespace AlibabaCloud\BatchCompute\V20161111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method OrderRefundCallback orderRefundCallback(array $options = [])
 */
class BatchComputeApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'BatchCompute';

    /** @var string */
    public $version = '2016-11-11';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getData()
 */
class OrderRefundCallback extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['data'] = $value;

        return $this;
    }
}

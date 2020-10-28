<?php

namespace AlibabaCloud\Drds\V20160506;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method OrderRefund orderRefund(array $options = [])
 */
class DrdsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Drds';

    /** @var string */
    public $version = '2016-05-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'Drds';
}

/**
 * @method string getData()
 */
class OrderRefund extends Rpc
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

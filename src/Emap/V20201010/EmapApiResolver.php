<?php

namespace AlibabaCloud\Emap\V20201010;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method QueryMapInfoOpen queryMapInfoOpen(array $options = [])
 */
class EmapApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'emap';

    /** @var string */
    public $version = '2020-10-10';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getStoreId()
 */
class QueryMapInfoOpen extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

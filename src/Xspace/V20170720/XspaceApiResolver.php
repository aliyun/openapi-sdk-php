<?php

namespace AlibabaCloud\Xspace\V20170720;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method QueryCustomerByPhone queryCustomerByPhone(array $options = [])
 * @method QueryCustomerById queryCustomerById(array $options = [])
 */
class XspaceApiResolver
{
    use ApiResolverTrait;
}

class V20170720Roa extends Roa
{
    /** @var string */
    public $product = 'xspace';

    /** @var string */
    public $version = '2017-07-20';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPhone()
 */
class QueryCustomerByPhone extends V20170720Roa
{
    /** @var string */
    public $pathPattern = '/customerbyphone';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhone($value)
    {
        $this->data['Phone'] = $value;
        $this->options['query']['Phone'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class QueryCustomerById extends V20170720Roa
{
    /** @var string */
    public $pathPattern = '/customer';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

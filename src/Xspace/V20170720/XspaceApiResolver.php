<?php

namespace AlibabaCloud\Xspace\V20170720;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method QueryCustomerById queryCustomerById(array $options = [])
 * @method QueryCustomerByPhone queryCustomerByPhone(array $options = [])
 */
class XspaceApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'xspace';

    /** @var string */
    public $version = '2017-07-20';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getId()
 */
class QueryCustomerById extends Roa
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

/**
 * @method string getPhone()
 */
class QueryCustomerByPhone extends Roa
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

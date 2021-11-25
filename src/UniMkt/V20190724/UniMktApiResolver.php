<?php

namespace AlibabaCloud\UniMkt\V20190724;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetDeviceShortChainUrl getDeviceShortChainUrl(array $options = [])
 */
class UniMktApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'UniMkt';

    /** @var string */
    public $version = '2019-07-24';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = '1.0.0';
}

/**
 * @method string getLongterm()
 * @method string getUrl()
 */
class GetDeviceShortChainUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLongterm($value)
    {
        $this->data['Longterm'] = $value;
        $this->options['form_params']['Longterm'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrl($value)
    {
        $this->data['Url'] = $value;
        $this->options['form_params']['Url'] = $value;

        return $this;
    }
}

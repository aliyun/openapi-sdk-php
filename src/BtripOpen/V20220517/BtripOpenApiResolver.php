<?php

namespace AlibabaCloud\BtripOpen\V20220517;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method TakeAccessToken takeAccessToken(array $options = [])
 */
class BtripOpenApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'btripOpen';

    /** @var string */
    public $version = '2022-05-17';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getAppKey()
 * @method string getAppSecret()
 */
class TakeAccessToken extends Roa
{
    /** @var string */
    public $pathPattern = '/btrip/open/access-token/take';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['query']['app_key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppSecret($value)
    {
        $this->data['AppSecret'] = $value;
        $this->options['query']['app_secret'] = $value;

        return $this;
    }
}

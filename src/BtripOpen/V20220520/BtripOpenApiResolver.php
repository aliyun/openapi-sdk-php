<?php

namespace AlibabaCloud\BtripOpen\V20220520;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AccessToken accessToken(array $options = [])
 */
class BtripOpenApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'btripOpen';

    /** @var string */
    public $version = '2022-05-20';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getAppKey()
 * @method string getAppSecret()
 */
class AccessToken extends Roa
{
    /** @var string */
    public $pathPattern = '/btrip-open-auth/v1/access-token/action/take';

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

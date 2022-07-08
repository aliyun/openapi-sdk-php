<?php

namespace AlibabaCloud\Wfts\V20220212;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetLjxAccountInfo getLjxAccountInfo(array $options = [])
 */
class WftsApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'Wfts';

    /** @var string */
    public $version = '2022-02-12';
}

/**
 * @method string getLjxAccountInfoId()
 */
class GetLjxAccountInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/get/ljx/acc';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLjxAccountInfoId($value)
    {
        $this->data['LjxAccountInfoId'] = $value;
        $this->options['query']['LjxAccountInfoId'] = $value;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PrepareCompany
 *
 * @method string getPlatform()
 */
class PrepareCompany extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'cloudesl';

    /**
     * @var string
     */
    public $version = '2018-08-01';

    /**
     * @var string
     */
    public $action = 'PrepareCompany';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $platform
     *
     * @return $this
     */
    public function withPlatform($platform)
    {
        $this->data['Platform'] = $platform;
        $this->options['query']['Platform'] = $platform;

        return $this;
    }
}

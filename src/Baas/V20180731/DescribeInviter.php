<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeInviter
 *
 * @method string getCode()
 */
class DescribeInviter extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'DescribeInviter';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $code
     *
     * @return $this
     */
    public function withCode($code)
    {
        $this->data['Code'] = $code;
        $this->options['query']['Code'] = $code;

        return $this;
    }
}

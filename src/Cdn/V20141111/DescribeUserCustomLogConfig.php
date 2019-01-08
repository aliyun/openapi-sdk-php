<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeUserCustomLogConfig
 *
 * @method string getOwnerId()
 */
class DescribeUserCustomLogConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeUserCustomLogConfig';

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}

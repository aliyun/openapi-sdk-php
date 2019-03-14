<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeUserCustomLogConfig
 *
 * @method string getOwnerId()
 */
class DescribeUserCustomLogConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

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

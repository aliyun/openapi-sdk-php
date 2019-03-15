<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Rpc;

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class FinishDemand extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-02-08';

    public $method = 'POST';
}

<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Rpc;

/**
 * @method string getPrice()
 * @method $this withPrice($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getProduceType()
 * @method $this withProduceType($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class RequestPayDemand extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-02-08';

    public $method = 'POST';
}

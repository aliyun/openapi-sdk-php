<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainRealTimeHttpCodeData extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}

<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Rpc;

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeScdnDomainRealTimeQpsData extends Rpc
{
    public $product = 'scdn';

    public $version = '2017-11-15';

    public $serviceCode = 'scdn';
}

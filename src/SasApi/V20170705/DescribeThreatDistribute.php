<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHitDay()
 * @method $this withHitDay($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getApiType()
 * @method $this withApiType($value)
 */
class DescribeThreatDistribute extends Rpc
{
    public $product = 'Sas-api';

    public $version = '2017-07-05';

    public $method = 'POST';
}

<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Rpc;

/**
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getDomainCount()
 * @method $this withDomainCount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProtectType()
 * @method $this withProtectType($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getElasticProtection()
 * @method $this withElasticProtection($value)
 * @method string getDDoSBasic()
 * @method $this withDDoSBasic($value)
 * @method string getCcProtection()
 * @method $this withCcProtection($value)
 */
class OpenScdnService extends Rpc
{
    public $product = 'scdn';

    public $version = '2017-11-15';

    public $method = 'POST';

    public $serviceCode = 'scdn';
}

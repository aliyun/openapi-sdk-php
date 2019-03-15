<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Rpc;

/**
 * @method string getForceSet()
 * @method $this withForceSet($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getSSLProtocol()
 * @method $this withSSLProtocol($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getSSLPri()
 * @method $this withSSLPri($value)
 */
class SetScdnDomainCertificate extends Rpc
{
    public $product = 'scdn';

    public $version = '2017-11-15';

    public $method = 'POST';

    public $serviceCode = 'scdn';
}

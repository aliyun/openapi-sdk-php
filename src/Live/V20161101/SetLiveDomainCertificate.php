<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
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
 * @method string getSSLPri()
 * @method $this withSSLPri($value)
 */
class SetLiveDomainCertificate extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}

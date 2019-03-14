<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Rpc;

/**
 * Api DescribeDcdnCertificateDetail
 *
 * @method string getSecurityToken()
 * @method string getCertName()
 * @method string getOwnerId()
 */
class DescribeDcdnCertificateDetail extends Rpc
{
    public $product = 'dcdn';

    public $version = '2018-01-15';

    public $method = 'POST';

    public $serviceCode = 'dcdn';

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $certName
     *
     * @return $this
     */
    public function withCertName($certName)
    {
        $this->data['CertName'] = $certName;
        $this->options['query']['CertName'] = $certName;

        return $this;
    }

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

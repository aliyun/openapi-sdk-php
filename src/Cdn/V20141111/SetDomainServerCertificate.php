<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api SetDomainServerCertificate
 *
 * @method string getPrivateKey()
 * @method string getForceSet()
 * @method string getServerCertificateStatus()
 * @method string getServerCertificate()
 * @method string getSecurityToken()
 * @method string getCertType()
 * @method string getCertName()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getRegion()
 */
class SetDomainServerCertificate extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

    /**
     * @param string $privateKey
     *
     * @return $this
     */
    public function withPrivateKey($privateKey)
    {
        $this->data['PrivateKey'] = $privateKey;
        $this->options['query']['PrivateKey'] = $privateKey;

        return $this;
    }

    /**
     * @param string $forceSet
     *
     * @return $this
     */
    public function withForceSet($forceSet)
    {
        $this->data['ForceSet'] = $forceSet;
        $this->options['query']['ForceSet'] = $forceSet;

        return $this;
    }

    /**
     * @param string $serverCertificateStatus
     *
     * @return $this
     */
    public function withServerCertificateStatus($serverCertificateStatus)
    {
        $this->data['ServerCertificateStatus'] = $serverCertificateStatus;
        $this->options['query']['ServerCertificateStatus'] = $serverCertificateStatus;

        return $this;
    }

    /**
     * @param string $serverCertificate
     *
     * @return $this
     */
    public function withServerCertificate($serverCertificate)
    {
        $this->data['ServerCertificate'] = $serverCertificate;
        $this->options['query']['ServerCertificate'] = $serverCertificate;

        return $this;
    }

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
     * @param string $certType
     *
     * @return $this
     */
    public function withCertType($certType)
    {
        $this->data['CertType'] = $certType;
        $this->options['query']['CertType'] = $certType;

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
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

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

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Rpc;

/**
 * Api SetDcdnDomainCertificate
 *
 * @method string getForceSet()
 * @method string getSecurityToken()
 * @method string getCertType()
 * @method string getSSLPub()
 * @method string getCertName()
 * @method string getSSLProtocol()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getRegion()
 * @method string getSSLPri()
 */
class SetDcdnDomainCertificate extends Rpc
{
    public $product = 'dcdn';

    public $version = '2018-01-15';

    public $method = 'POST';

    public $serviceCode = 'dcdn';

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
     * @param string $sSLPub
     *
     * @return $this
     */
    public function withSSLPub($sSLPub)
    {
        $this->data['SSLPub'] = $sSLPub;
        $this->options['query']['SSLPub'] = $sSLPub;

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
     * @param string $sSLProtocol
     *
     * @return $this
     */
    public function withSSLProtocol($sSLProtocol)
    {
        $this->data['SSLProtocol'] = $sSLProtocol;
        $this->options['query']['SSLProtocol'] = $sSLProtocol;

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

    /**
     * @param string $sSLPri
     *
     * @return $this
     */
    public function withSSLPri($sSLPri)
    {
        $this->data['SSLPri'] = $sSLPri;
        $this->options['query']['SSLPri'] = $sSLPri;

        return $this;
    }
}

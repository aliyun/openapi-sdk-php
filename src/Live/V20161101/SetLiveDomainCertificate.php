<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetLiveDomainCertificate
 *
 * @method string getSecurityToken()
 * @method string getSSLPub()
 * @method string getCertName()
 * @method string getSSLProtocol()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getSSLPri()
 */
class SetLiveDomainCertificate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'SetLiveDomainCertificate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
     * @deprecated deprecated since version 2.0, Use withSSLPub() instead.
     *
     * @param string $sSLPub
     *
     * @return $this
     */
    public function setSSLPub($sSLPub)
    {
        return $this->withSSLPub($sSLPub);
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
     * @deprecated deprecated since version 2.0, Use withCertName() instead.
     *
     * @param string $certName
     *
     * @return $this
     */
    public function setCertName($certName)
    {
        return $this->withCertName($certName);
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
     * @deprecated deprecated since version 2.0, Use withSSLProtocol() instead.
     *
     * @param string $sSLProtocol
     *
     * @return $this
     */
    public function setSSLProtocol($sSLProtocol)
    {
        return $this->withSSLProtocol($sSLProtocol);
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
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withSSLPri() instead.
     *
     * @param string $sSLPri
     *
     * @return $this
     */
    public function setSSLPri($sSLPri)
    {
        return $this->withSSLPri($sSLPri);
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

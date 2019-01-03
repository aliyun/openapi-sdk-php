<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDomainServerCertificate
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
class SetDomainServerCertificate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'SetDomainServerCertificate';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPrivateKey() instead.
     *
     * @param string $privateKey
     *
     * @return $this
     */
    public function setPrivateKey($privateKey)
    {
        return $this->withPrivateKey($privateKey);
    }

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
     * @deprecated deprecated since version 2.0, Use withForceSet() instead.
     *
     * @param string $forceSet
     *
     * @return $this
     */
    public function setForceSet($forceSet)
    {
        return $this->withForceSet($forceSet);
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
     * @deprecated deprecated since version 2.0, Use withServerCertificateStatus() instead.
     *
     * @param string $serverCertificateStatus
     *
     * @return $this
     */
    public function setServerCertificateStatus($serverCertificateStatus)
    {
        return $this->withServerCertificateStatus($serverCertificateStatus);
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
     * @deprecated deprecated since version 2.0, Use withServerCertificate() instead.
     *
     * @param string $serverCertificate
     *
     * @return $this
     */
    public function setServerCertificate($serverCertificate)
    {
        return $this->withServerCertificate($serverCertificate);
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
     * @deprecated deprecated since version 2.0, Use withCertType() instead.
     *
     * @param string $certType
     *
     * @return $this
     */
    public function setCertType($certType)
    {
        return $this->withCertType($certType);
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
     * @deprecated deprecated since version 2.0, Use withRegion() instead.
     *
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        return $this->withRegion($region);
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

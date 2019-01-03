<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential
 *
 * @method string getIdentityCredentialType()
 * @method string getUserClientIp()
 * @method string getIdentityCredential()
 * @method array getDomainName()
 * @method string getLang()
 * @method string getIdentityCredentialNo()
 */
class SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-01-29';

    /**
     * @var string
     */
    public $action = 'SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withIdentityCredentialType() instead.
     *
     * @param string $identityCredentialType
     *
     * @return $this
     */
    public function setIdentityCredentialType($identityCredentialType)
    {
        return $this->withIdentityCredentialType($identityCredentialType);
    }

    /**
     * @param string $identityCredentialType
     *
     * @return $this
     */
    public function withIdentityCredentialType($identityCredentialType)
    {
        $this->data['IdentityCredentialType'] = $identityCredentialType;
        $this->options['query']['IdentityCredentialType'] = $identityCredentialType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIdentityCredential() instead.
     *
     * @param string $identityCredential
     *
     * @return $this
     */
    public function setIdentityCredential($identityCredential)
    {
        return $this->withIdentityCredential($identityCredential);
    }

    /**
     * @param string $identityCredential
     *
     * @return $this
     */
    public function withIdentityCredential($identityCredential)
    {
        $this->data['IdentityCredential'] = $identityCredential;
        $this->options['query']['IdentityCredential'] = $identityCredential;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getDomainName() instead.
     *
     * @return array
     */
    public function getDomainNames()
    {
        return $this->getDomainName();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param array $domainNames
     *
     * @return $this
     */
    public function setDomainNames(array $domainNames)
    {
        return $this->withDomainName($domainNames);
    }

    /**
     * @param array $domainName
     *
     * @return $this
     */
    public function withDomainName(array $domainName)
    {
        $this->data['DomainName'] = $domainName;
        foreach ($domainName as $i => $iValue) {
            $this->options['query']['DomainName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIdentityCredentialNo() instead.
     *
     * @param string $identityCredentialNo
     *
     * @return $this
     */
    public function setIdentityCredentialNo($identityCredentialNo)
    {
        return $this->withIdentityCredentialNo($identityCredentialNo);
    }

    /**
     * @param string $identityCredentialNo
     *
     * @return $this
     */
    public function withIdentityCredentialNo($identityCredentialNo)
    {
        $this->data['IdentityCredentialNo'] = $identityCredentialNo;
        $this->options['query']['IdentityCredentialNo'] = $identityCredentialNo;

        return $this;
    }
}

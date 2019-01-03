<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RegistrantProfileRealNameVerification
 *
 * @method string getIdentityCredentialType()
 * @method string getUserClientIp()
 * @method string getRegistrantProfileID()
 * @method string getIdentityCredential()
 * @method string getLang()
 * @method string getIdentityCredentialNo()
 */
class RegistrantProfileRealNameVerification extends RpcRequest
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
    public $action = 'RegistrantProfileRealNameVerification';

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
     * @deprecated deprecated since version 2.0, Use withRegistrantProfileID() instead.
     *
     * @param string $registrantProfileID
     *
     * @return $this
     */
    public function setRegistrantProfileID($registrantProfileID)
    {
        return $this->withRegistrantProfileID($registrantProfileID);
    }

    /**
     * @param string $registrantProfileID
     *
     * @return $this
     */
    public function withRegistrantProfileID($registrantProfileID)
    {
        $this->data['RegistrantProfileID'] = $registrantProfileID;
        $this->options['query']['RegistrantProfileID'] = $registrantProfileID;

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

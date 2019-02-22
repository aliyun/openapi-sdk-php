<?php

namespace AlibabaCloud\DomainIntl\V20171218;

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
    public $product = 'Domain-intl';

    /**
     * @var string
     */
    public $version = '2017-12-18';

    /**
     * @var string
     */
    public $action = 'RegistrantProfileRealNameVerification';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'domain';

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

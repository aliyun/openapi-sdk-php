<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDomain
 *
 * @method string getSecurityToken()
 * @method string getCertificatePrivateKey()
 * @method string getGroupId()
 * @method string getDomainName()
 * @method string getCertificateName()
 * @method string getCertificateBody()
 */
class SetDomain extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'SetDomain';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

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
     * @param string $certificatePrivateKey
     *
     * @return $this
     */
    public function withCertificatePrivateKey($certificatePrivateKey)
    {
        $this->data['CertificatePrivateKey'] = $certificatePrivateKey;
        $this->options['query']['CertificatePrivateKey'] = $certificatePrivateKey;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

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
     * @param string $certificateName
     *
     * @return $this
     */
    public function withCertificateName($certificateName)
    {
        $this->data['CertificateName'] = $certificateName;
        $this->options['query']['CertificateName'] = $certificateName;

        return $this;
    }

    /**
     * @param string $certificateBody
     *
     * @return $this
     */
    public function withCertificateBody($certificateBody)
    {
        $this->data['CertificateBody'] = $certificateBody;
        $this->options['query']['CertificateBody'] = $certificateBody;

        return $this;
    }
}

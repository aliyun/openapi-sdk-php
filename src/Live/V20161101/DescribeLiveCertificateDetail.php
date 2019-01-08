<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeLiveCertificateDetail
 *
 * @method string getSecurityToken()
 * @method string getCertName()
 * @method string getOwnerId()
 */
class DescribeLiveCertificateDetail extends RpcRequest
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
    public $action = 'DescribeLiveCertificateDetail';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

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

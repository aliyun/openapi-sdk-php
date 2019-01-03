<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CheckConsortiumDomain
 *
 * @method string getDomainCode()
 */
class CheckConsortiumDomain extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'CheckConsortiumDomain';

    /**
     * @var string
     */
    public $method = 'PUT';

    /**
     * @deprecated deprecated since version 2.0, Use withDomainCode() instead.
     *
     * @param string $domainCode
     *
     * @return $this
     */
    public function setDomainCode($domainCode)
    {
        return $this->withDomainCode($domainCode);
    }

    /**
     * @param string $domainCode
     *
     * @return $this
     */
    public function withDomainCode($domainCode)
    {
        $this->data['DomainCode'] = $domainCode;
        $this->options['query']['DomainCode'] = $domainCode;

        return $this;
    }
}

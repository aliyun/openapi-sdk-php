<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CheckOrganizationDomain
 *
 * @method string getDomainCode()
 * @method string getDomain()
 */
class CheckOrganizationDomain extends RpcRequest
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
    public $action = 'CheckOrganizationDomain';

    /**
     * @var string
     */
    public $method = 'PUT';

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

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function withDomain($domain)
    {
        $this->data['Domain'] = $domain;
        $this->options['query']['Domain'] = $domain;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteDomain
 *
 * @method string getAccountId()
 * @method string getDomainName()
 */
class DeleteDomain extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Httpdns';

    /**
     * @var string
     */
    public $version = '2016-02-01';

    /**
     * @var string
     */
    public $action = 'DeleteDomain';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withAccountId() instead.
     *
     * @param string $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        return $this->withAccountId($accountId);
    }

    /**
     * @param string $accountId
     *
     * @return $this
     */
    public function withAccountId($accountId)
    {
        $this->data['AccountId'] = $accountId;
        $this->options['query']['AccountId'] = $accountId;

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
}

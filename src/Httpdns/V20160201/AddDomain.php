<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Rpc;

/**
 * Api AddDomain
 *
 * @method string getAccountId()
 * @method string getDomainName()
 */
class AddDomain extends Rpc
{
    public $product = 'Httpdns';

    public $version = '2016-02-01';

    public $method = 'POST';

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

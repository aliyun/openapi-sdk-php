<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api SetRefererRegexConfig
 *
 * @method string getSecurityToken()
 * @method string getReferRegexs()
 * @method string getDomainName()
 * @method string getReferType()
 * @method string getOwnerId()
 */
class SetRefererRegexConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

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
     * @param string $referRegexs
     *
     * @return $this
     */
    public function withReferRegexs($referRegexs)
    {
        $this->data['ReferRegexs'] = $referRegexs;
        $this->options['query']['ReferRegexs'] = $referRegexs;

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
     * @param string $referType
     *
     * @return $this
     */
    public function withReferType($referType)
    {
        $this->data['ReferType'] = $referType;
        $this->options['query']['ReferType'] = $referType;

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

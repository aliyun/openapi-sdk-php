<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetRefererRegexConfig
 *
 * @method string getSecurityToken()
 * @method string getReferRegexs()
 * @method string getDomainName()
 * @method string getReferType()
 * @method string getOwnerId()
 */
class SetRefererRegexConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'SetRefererRegexConfig';

    /**
     * @var string
     */
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

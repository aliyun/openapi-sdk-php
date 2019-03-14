<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api SetRefererConfig
 *
 * @method string getReferList()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getReferType()
 * @method string getDisableAst()
 * @method string getOwnerId()
 * @method string getAllowEmpty()
 */
class SetRefererConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';

    /**
     * @param string $referList
     *
     * @return $this
     */
    public function withReferList($referList)
    {
        $this->data['ReferList'] = $referList;
        $this->options['query']['ReferList'] = $referList;

        return $this;
    }

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
     * @param string $disableAst
     *
     * @return $this
     */
    public function withDisableAst($disableAst)
    {
        $this->data['DisableAst'] = $disableAst;
        $this->options['query']['DisableAst'] = $disableAst;

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

    /**
     * @param string $allowEmpty
     *
     * @return $this
     */
    public function withAllowEmpty($allowEmpty)
    {
        $this->data['AllowEmpty'] = $allowEmpty;
        $this->options['query']['AllowEmpty'] = $allowEmpty;

        return $this;
    }
}

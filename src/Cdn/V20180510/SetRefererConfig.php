<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetRefererConfig
 *
 * @method string getReferList()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getReferType()
 * @method string getDisableAst()
 * @method string getOwnerId()
 * @method string getAllowEmpty()
 */
class SetRefererConfig extends RpcRequest
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
    public $action = 'SetRefererConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withReferList() instead.
     *
     * @param string $referList
     *
     * @return $this
     */
    public function setReferList($referList)
    {
        return $this->withReferList($referList);
    }

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
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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

    /**
     * @deprecated deprecated since version 2.0, Use withReferType() instead.
     *
     * @param string $referType
     *
     * @return $this
     */
    public function setReferType($referType)
    {
        return $this->withReferType($referType);
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
     * @deprecated deprecated since version 2.0, Use withDisableAst() instead.
     *
     * @param string $disableAst
     *
     * @return $this
     */
    public function setDisableAst($disableAst)
    {
        return $this->withDisableAst($disableAst);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withAllowEmpty() instead.
     *
     * @param string $allowEmpty
     *
     * @return $this
     */
    public function setAllowEmpty($allowEmpty)
    {
        return $this->withAllowEmpty($allowEmpty);
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

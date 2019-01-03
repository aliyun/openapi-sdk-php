<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetBusinessFunctionConfig
 *
 * @method string getArgRegex()
 * @method string getNullAllowed()
 * @method string getConfigs()
 * @method string getArgName()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getConflictFunction()
 * @method string getFunctionId()
 * @method string getArgValue()
 * @method string getSecurityToken()
 * @method string getFunctionName()
 * @method string getCheckUrl()
 * @method string getArgId()
 * @method string getSeqId()
 */
class SetBusinessFunctionConfig extends RpcRequest
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
    public $action = 'SetBusinessFunctionConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withArgRegex() instead.
     *
     * @param string $argRegex
     *
     * @return $this
     */
    public function setArgRegex($argRegex)
    {
        return $this->withArgRegex($argRegex);
    }

    /**
     * @param string $argRegex
     *
     * @return $this
     */
    public function withArgRegex($argRegex)
    {
        $this->data['ArgRegex'] = $argRegex;
        $this->options['query']['ArgRegex'] = $argRegex;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNullAllowed() instead.
     *
     * @param string $nullAllowed
     *
     * @return $this
     */
    public function setNullAllowed($nullAllowed)
    {
        return $this->withNullAllowed($nullAllowed);
    }

    /**
     * @param string $nullAllowed
     *
     * @return $this
     */
    public function withNullAllowed($nullAllowed)
    {
        $this->data['NullAllowed'] = $nullAllowed;
        $this->options['query']['NullAllowed'] = $nullAllowed;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withConfigs() instead.
     *
     * @param string $configs
     *
     * @return $this
     */
    public function setConfigs($configs)
    {
        return $this->withConfigs($configs);
    }

    /**
     * @param string $configs
     *
     * @return $this
     */
    public function withConfigs($configs)
    {
        $this->data['Configs'] = $configs;
        $this->options['query']['Configs'] = $configs;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withArgName() instead.
     *
     * @param string $argName
     *
     * @return $this
     */
    public function setArgName($argName)
    {
        return $this->withArgName($argName);
    }

    /**
     * @param string $argName
     *
     * @return $this
     */
    public function withArgName($argName)
    {
        $this->data['ArgName'] = $argName;
        $this->options['query']['ArgName'] = $argName;

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
     * @deprecated deprecated since version 2.0, Use withConflictFunction() instead.
     *
     * @param string $conflictFunction
     *
     * @return $this
     */
    public function setConflictFunction($conflictFunction)
    {
        return $this->withConflictFunction($conflictFunction);
    }

    /**
     * @param string $conflictFunction
     *
     * @return $this
     */
    public function withConflictFunction($conflictFunction)
    {
        $this->data['ConflictFunction'] = $conflictFunction;
        $this->options['query']['ConflictFunction'] = $conflictFunction;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFunctionId() instead.
     *
     * @param string $functionId
     *
     * @return $this
     */
    public function setFunctionId($functionId)
    {
        return $this->withFunctionId($functionId);
    }

    /**
     * @param string $functionId
     *
     * @return $this
     */
    public function withFunctionId($functionId)
    {
        $this->data['FunctionId'] = $functionId;
        $this->options['query']['FunctionId'] = $functionId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withArgValue() instead.
     *
     * @param string $argValue
     *
     * @return $this
     */
    public function setArgValue($argValue)
    {
        return $this->withArgValue($argValue);
    }

    /**
     * @param string $argValue
     *
     * @return $this
     */
    public function withArgValue($argValue)
    {
        $this->data['ArgValue'] = $argValue;
        $this->options['query']['ArgValue'] = $argValue;

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
     * @deprecated deprecated since version 2.0, Use withFunctionName() instead.
     *
     * @param string $functionName
     *
     * @return $this
     */
    public function setFunctionName($functionName)
    {
        return $this->withFunctionName($functionName);
    }

    /**
     * @param string $functionName
     *
     * @return $this
     */
    public function withFunctionName($functionName)
    {
        $this->data['FunctionName'] = $functionName;
        $this->options['query']['FunctionName'] = $functionName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCheckUrl() instead.
     *
     * @param string $checkUrl
     *
     * @return $this
     */
    public function setCheckUrl($checkUrl)
    {
        return $this->withCheckUrl($checkUrl);
    }

    /**
     * @param string $checkUrl
     *
     * @return $this
     */
    public function withCheckUrl($checkUrl)
    {
        $this->data['CheckUrl'] = $checkUrl;
        $this->options['query']['CheckUrl'] = $checkUrl;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withArgId() instead.
     *
     * @param string $argId
     *
     * @return $this
     */
    public function setArgId($argId)
    {
        return $this->withArgId($argId);
    }

    /**
     * @param string $argId
     *
     * @return $this
     */
    public function withArgId($argId)
    {
        $this->data['ArgId'] = $argId;
        $this->options['query']['ArgId'] = $argId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSeqId() instead.
     *
     * @param string $seqId
     *
     * @return $this
     */
    public function setSeqId($seqId)
    {
        return $this->withSeqId($seqId);
    }

    /**
     * @param string $seqId
     *
     * @return $this
     */
    public function withSeqId($seqId)
    {
        $this->data['SeqId'] = $seqId;
        $this->options['query']['SeqId'] = $seqId;

        return $this;
    }
}

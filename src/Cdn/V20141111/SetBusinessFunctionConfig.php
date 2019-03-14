<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api SetBusinessFunctionConfig
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
class SetBusinessFunctionConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';

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

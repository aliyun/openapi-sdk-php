<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDomainFiletypeForceTtlCodeConfig
 *
 * @method string getFileType()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getVersion()
 * @method string getCodeString()
 * @method string getSecurityToken()
 */
class SetDomainFiletypeForceTtlCodeConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'SetDomainFiletypeForceTtlCodeConfig';

    /**
     * @param string $fileType
     *
     * @return $this
     */
    public function withFileType($fileType)
    {
        $this->data['FileType'] = $fileType;
        $this->options['query']['FileType'] = $fileType;

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
     * @param string $version
     *
     * @return $this
     */
    public function withVersion($version)
    {
        $this->data['Version'] = $version;
        $this->options['query']['Version'] = $version;

        return $this;
    }

    /**
     * @param string $codeString
     *
     * @return $this
     */
    public function withCodeString($codeString)
    {
        $this->data['CodeString'] = $codeString;
        $this->options['query']['CodeString'] = $codeString;

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
}

<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * Api SetHttpErrorPageConfig
 *
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getPageUrl()
 * @method string getOwnerId()
 * @method string getErrorCode()
 */
class SetHttpErrorPageConfig extends Rpc
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
     * @param string $pageUrl
     *
     * @return $this
     */
    public function withPageUrl($pageUrl)
    {
        $this->data['PageUrl'] = $pageUrl;
        $this->options['query']['PageUrl'] = $pageUrl;

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
     * @param string $errorCode
     *
     * @return $this
     */
    public function withErrorCode($errorCode)
    {
        $this->data['ErrorCode'] = $errorCode;
        $this->options['query']['ErrorCode'] = $errorCode;

        return $this;
    }
}

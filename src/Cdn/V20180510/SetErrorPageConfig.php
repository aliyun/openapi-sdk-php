<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api SetErrorPageConfig
 *
 * @method string getPageType()
 * @method string getSecurityToken()
 * @method string getDomainName()
 * @method string getCustomPageUrl()
 * @method string getOwnerId()
 */
class SetErrorPageConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';

    /**
     * @param string $pageType
     *
     * @return $this
     */
    public function withPageType($pageType)
    {
        $this->data['PageType'] = $pageType;
        $this->options['query']['PageType'] = $pageType;

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
     * @param string $customPageUrl
     *
     * @return $this
     */
    public function withCustomPageUrl($customPageUrl)
    {
        $this->data['CustomPageUrl'] = $customPageUrl;
        $this->options['query']['CustomPageUrl'] = $customPageUrl;

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

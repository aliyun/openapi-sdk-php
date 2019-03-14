<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api SetHttpErrorPageConfig
 *
 * @method string getPageUrl()
 * @method string getErrorCode()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getConfigId()
 */
class SetHttpErrorPageConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

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
     * @param string $configId
     *
     * @return $this
     */
    public function withConfigId($configId)
    {
        $this->data['ConfigId'] = $configId;
        $this->options['query']['ConfigId'] = $configId;

        return $this;
    }
}

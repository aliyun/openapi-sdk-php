<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeCdnSubscription
 *
 * @method string getSourceIp()
 * @method string getSubscriptionState()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getVendorName()
 * @method string getSourceCode()
 */
class DescribeCdnSubscription extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'jarvis';

    /**
     * @var string
     */
    public $version = '2018-02-06';

    /**
     * @var string
     */
    public $action = 'DescribeCdnSubscription';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSubscriptionState() instead.
     *
     * @param string $subscriptionState
     *
     * @return $this
     */
    public function setSubscriptionState($subscriptionState)
    {
        return $this->withSubscriptionState($subscriptionState);
    }

    /**
     * @param string $subscriptionState
     *
     * @return $this
     */
    public function withSubscriptionState($subscriptionState)
    {
        $this->data['SubscriptionState'] = $subscriptionState;
        $this->options['query']['SubscriptionState'] = $subscriptionState;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCurrentPage() instead.
     *
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        return $this->withCurrentPage($currentPage);
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVendorName() instead.
     *
     * @param string $vendorName
     *
     * @return $this
     */
    public function setVendorName($vendorName)
    {
        return $this->withVendorName($vendorName);
    }

    /**
     * @param string $vendorName
     *
     * @return $this
     */
    public function withVendorName($vendorName)
    {
        $this->data['VendorName'] = $vendorName;
        $this->options['query']['VendorName'] = $vendorName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceCode() instead.
     *
     * @param string $sourceCode
     *
     * @return $this
     */
    public function setSourceCode($sourceCode)
    {
        return $this->withSourceCode($sourceCode);
    }

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function withSourceCode($sourceCode)
    {
        $this->data['SourceCode'] = $sourceCode;
        $this->options['query']['SourceCode'] = $sourceCode;

        return $this;
    }
}

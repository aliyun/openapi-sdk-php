<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeWebsiteScanResult
 *
 * @method string getTotalCount()
 * @method string getSubServiceModule()
 * @method string getSiteUrl()
 * @method string getSourceIp()
 * @method string getHandleStatus()
 * @method string getDomain()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getLabel()
 * @method string getLang()
 */
class DescribeWebsiteScanResult extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'DescribeWebsiteScanResult';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @deprecated deprecated since version 2.0, Use withTotalCount() instead.
     *
     * @param string $totalCount
     *
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        return $this->withTotalCount($totalCount);
    }

    /**
     * @param string $totalCount
     *
     * @return $this
     */
    public function withTotalCount($totalCount)
    {
        $this->data['TotalCount'] = $totalCount;
        $this->options['query']['TotalCount'] = $totalCount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSubServiceModule() instead.
     *
     * @param string $subServiceModule
     *
     * @return $this
     */
    public function setSubServiceModule($subServiceModule)
    {
        return $this->withSubServiceModule($subServiceModule);
    }

    /**
     * @param string $subServiceModule
     *
     * @return $this
     */
    public function withSubServiceModule($subServiceModule)
    {
        $this->data['SubServiceModule'] = $subServiceModule;
        $this->options['query']['SubServiceModule'] = $subServiceModule;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSiteUrl() instead.
     *
     * @param string $siteUrl
     *
     * @return $this
     */
    public function setSiteUrl($siteUrl)
    {
        return $this->withSiteUrl($siteUrl);
    }

    /**
     * @param string $siteUrl
     *
     * @return $this
     */
    public function withSiteUrl($siteUrl)
    {
        $this->data['SiteUrl'] = $siteUrl;
        $this->options['query']['SiteUrl'] = $siteUrl;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withHandleStatus() instead.
     *
     * @param string $handleStatus
     *
     * @return $this
     */
    public function setHandleStatus($handleStatus)
    {
        return $this->withHandleStatus($handleStatus);
    }

    /**
     * @param string $handleStatus
     *
     * @return $this
     */
    public function withHandleStatus($handleStatus)
    {
        $this->data['HandleStatus'] = $handleStatus;
        $this->options['query']['HandleStatus'] = $handleStatus;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomain() instead.
     *
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        return $this->withDomain($domain);
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function withDomain($domain)
    {
        $this->data['Domain'] = $domain;
        $this->options['query']['Domain'] = $domain;

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
     * @deprecated deprecated since version 2.0, Use withLabel() instead.
     *
     * @param string $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        return $this->withLabel($label);
    }

    /**
     * @param string $label
     *
     * @return $this
     */
    public function withLabel($label)
    {
        $this->data['Label'] = $label;
        $this->options['query']['Label'] = $label;

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
}

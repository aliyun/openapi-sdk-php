<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api DescribeWebsiteScanResult
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
class DescribeWebsiteScanResult extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

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

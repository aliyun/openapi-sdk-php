<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api UpdateWebsiteInstance
 *
 * @method string getSiteProtocol()
 * @method string getInstanceId()
 * @method string getSourceIp()
 * @method string getWebsiteScanInterval()
 * @method string getDomain()
 * @method string getIndexPage()
 * @method string getLang()
 * @method string getIndexPageScanInterval()
 */
class UpdateWebsiteInstance extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

    /**
     * @param string $siteProtocol
     *
     * @return $this
     */
    public function withSiteProtocol($siteProtocol)
    {
        $this->data['SiteProtocol'] = $siteProtocol;
        $this->options['query']['SiteProtocol'] = $siteProtocol;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

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
     * @param string $websiteScanInterval
     *
     * @return $this
     */
    public function withWebsiteScanInterval($websiteScanInterval)
    {
        $this->data['WebsiteScanInterval'] = $websiteScanInterval;
        $this->options['query']['WebsiteScanInterval'] = $websiteScanInterval;

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
     * @param string $indexPage
     *
     * @return $this
     */
    public function withIndexPage($indexPage)
    {
        $this->data['IndexPage'] = $indexPage;
        $this->options['query']['IndexPage'] = $indexPage;

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

    /**
     * @param string $indexPageScanInterval
     *
     * @return $this
     */
    public function withIndexPageScanInterval($indexPageScanInterval)
    {
        $this->data['IndexPageScanInterval'] = $indexPageScanInterval;
        $this->options['query']['IndexPageScanInterval'] = $indexPageScanInterval;

        return $this;
    }
}

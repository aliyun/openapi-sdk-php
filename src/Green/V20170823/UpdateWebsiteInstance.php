<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateWebsiteInstance
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
class UpdateWebsiteInstance extends RpcRequest
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
    public $action = 'UpdateWebsiteInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @deprecated deprecated since version 2.0, Use withSiteProtocol() instead.
     *
     * @param string $siteProtocol
     *
     * @return $this
     */
    public function setSiteProtocol($siteProtocol)
    {
        return $this->withSiteProtocol($siteProtocol);
    }

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
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
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
     * @deprecated deprecated since version 2.0, Use withWebsiteScanInterval() instead.
     *
     * @param string $websiteScanInterval
     *
     * @return $this
     */
    public function setWebsiteScanInterval($websiteScanInterval)
    {
        return $this->withWebsiteScanInterval($websiteScanInterval);
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
     * @deprecated deprecated since version 2.0, Use withIndexPage() instead.
     *
     * @param string $indexPage
     *
     * @return $this
     */
    public function setIndexPage($indexPage)
    {
        return $this->withIndexPage($indexPage);
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
     * @deprecated deprecated since version 2.0, Use withIndexPageScanInterval() instead.
     *
     * @param string $indexPageScanInterval
     *
     * @return $this
     */
    public function setIndexPageScanInterval($indexPageScanInterval)
    {
        return $this->withIndexPageScanInterval($indexPageScanInterval);
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

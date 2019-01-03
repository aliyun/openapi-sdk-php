<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeCustomizeReportChartData
 *
 * @method string getSourceIp()
 * @method string getReportId()
 * @method string getChartIds()
 * @method string getLang()
 */
class DescribeCustomizeReportChartData extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'DescribeCustomizeReportChartData';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

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
     * @deprecated deprecated since version 2.0, Use withReportId() instead.
     *
     * @param string $reportId
     *
     * @return $this
     */
    public function setReportId($reportId)
    {
        return $this->withReportId($reportId);
    }

    /**
     * @param string $reportId
     *
     * @return $this
     */
    public function withReportId($reportId)
    {
        $this->data['ReportId'] = $reportId;
        $this->options['query']['ReportId'] = $reportId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withChartIds() instead.
     *
     * @param string $chartIds
     *
     * @return $this
     */
    public function setChartIds($chartIds)
    {
        return $this->withChartIds($chartIds);
    }

    /**
     * @param string $chartIds
     *
     * @return $this
     */
    public function withChartIds($chartIds)
    {
        $this->data['ChartIds'] = $chartIds;
        $this->options['query']['ChartIds'] = $chartIds;

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

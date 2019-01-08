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

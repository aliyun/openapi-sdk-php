<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateCustomizeReportStatus
 *
 * @method string getSourceIp()
 * @method string getReportId()
 * @method string getReportStatus()
 */
class UpdateCustomizeReportStatus extends RpcRequest
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
    public $action = 'UpdateCustomizeReportStatus';

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
     * @deprecated deprecated since version 2.0, Use withReportStatus() instead.
     *
     * @param string $reportStatus
     *
     * @return $this
     */
    public function setReportStatus($reportStatus)
    {
        return $this->withReportStatus($reportStatus);
    }

    /**
     * @param string $reportStatus
     *
     * @return $this
     */
    public function withReportStatus($reportStatus)
    {
        $this->data['ReportStatus'] = $reportStatus;
        $this->options['query']['ReportStatus'] = $reportStatus;

        return $this;
    }
}

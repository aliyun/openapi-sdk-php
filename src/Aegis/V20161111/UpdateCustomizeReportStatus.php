<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api UpdateCustomizeReportStatus
 *
 * @method string getSourceIp()
 * @method string getReportId()
 * @method string getReportStatus()
 */
class UpdateCustomizeReportStatus extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

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

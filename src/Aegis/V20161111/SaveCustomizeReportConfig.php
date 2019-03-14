<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api SaveCustomizeReportConfig
 *
 * @method string getReportType()
 * @method string getSourceIp()
 * @method string getReportId()
 * @method string getReportEndDate()
 * @method string getReportStartDate()
 * @method string getRecipients()
 * @method string getTitle()
 * @method string getSendTime()
 * @method string getReportStatus()
 */
class SaveCustomizeReportConfig extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $reportType
     *
     * @return $this
     */
    public function withReportType($reportType)
    {
        $this->data['ReportType'] = $reportType;
        $this->options['query']['ReportType'] = $reportType;

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
     * @param string $reportEndDate
     *
     * @return $this
     */
    public function withReportEndDate($reportEndDate)
    {
        $this->data['ReportEndDate'] = $reportEndDate;
        $this->options['query']['ReportEndDate'] = $reportEndDate;

        return $this;
    }

    /**
     * @param string $reportStartDate
     *
     * @return $this
     */
    public function withReportStartDate($reportStartDate)
    {
        $this->data['ReportStartDate'] = $reportStartDate;
        $this->options['query']['ReportStartDate'] = $reportStartDate;

        return $this;
    }

    /**
     * @param string $recipients
     *
     * @return $this
     */
    public function withRecipients($recipients)
    {
        $this->data['Recipients'] = $recipients;
        $this->options['query']['Recipients'] = $recipients;

        return $this;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function withTitle($title)
    {
        $this->data['Title'] = $title;
        $this->options['query']['Title'] = $title;

        return $this;
    }

    /**
     * @param string $sendTime
     *
     * @return $this
     */
    public function withSendTime($sendTime)
    {
        $this->data['SendTime'] = $sendTime;
        $this->options['query']['SendTime'] = $sendTime;

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

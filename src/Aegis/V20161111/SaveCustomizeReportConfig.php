<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveCustomizeReportConfig
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
class SaveCustomizeReportConfig extends RpcRequest
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
    public $action = 'SaveCustomizeReportConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withReportType() instead.
     *
     * @param string $reportType
     *
     * @return $this
     */
    public function setReportType($reportType)
    {
        return $this->withReportType($reportType);
    }

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
     * @deprecated deprecated since version 2.0, Use withReportEndDate() instead.
     *
     * @param string $reportEndDate
     *
     * @return $this
     */
    public function setReportEndDate($reportEndDate)
    {
        return $this->withReportEndDate($reportEndDate);
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
     * @deprecated deprecated since version 2.0, Use withReportStartDate() instead.
     *
     * @param string $reportStartDate
     *
     * @return $this
     */
    public function setReportStartDate($reportStartDate)
    {
        return $this->withReportStartDate($reportStartDate);
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
     * @deprecated deprecated since version 2.0, Use withRecipients() instead.
     *
     * @param string $recipients
     *
     * @return $this
     */
    public function setRecipients($recipients)
    {
        return $this->withRecipients($recipients);
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
     * @deprecated deprecated since version 2.0, Use withTitle() instead.
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->withTitle($title);
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
     * @deprecated deprecated since version 2.0, Use withSendTime() instead.
     *
     * @param string $sendTime
     *
     * @return $this
     */
    public function setSendTime($sendTime)
    {
        return $this->withSendTime($sendTime);
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

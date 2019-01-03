<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OperationCustomizeReportChart
 *
 * @method string getOperations()
 * @method string getSourceIp()
 * @method string getReportId()
 */
class OperationCustomizeReportChart extends RpcRequest
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
    public $action = 'OperationCustomizeReportChart';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withOperations() instead.
     *
     * @param string $operations
     *
     * @return $this
     */
    public function setOperations($operations)
    {
        return $this->withOperations($operations);
    }

    /**
     * @param string $operations
     *
     * @return $this
     */
    public function withOperations($operations)
    {
        $this->data['Operations'] = $operations;
        $this->options['query']['Operations'] = $operations;

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
}

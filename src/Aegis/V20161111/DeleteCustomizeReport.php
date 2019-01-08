<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCustomizeReport
 *
 * @method string getSourceIp()
 * @method string getReportId()
 */
class DeleteCustomizeReport extends RpcRequest
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
    public $action = 'DeleteCustomizeReport';

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
}

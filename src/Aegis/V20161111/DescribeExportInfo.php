<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeExportInfo
 *
 * @method string getSourceIp()
 * @method string getExportId()
 */
class DescribeExportInfo extends RpcRequest
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
    public $action = 'DescribeExportInfo';

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
     * @deprecated deprecated since version 2.0, Use withExportId() instead.
     *
     * @param string $exportId
     *
     * @return $this
     */
    public function setExportId($exportId)
    {
        return $this->withExportId($exportId);
    }

    /**
     * @param string $exportId
     *
     * @return $this
     */
    public function withExportId($exportId)
    {
        $this->data['ExportId'] = $exportId;
        $this->options['query']['ExportId'] = $exportId;

        return $this;
    }
}

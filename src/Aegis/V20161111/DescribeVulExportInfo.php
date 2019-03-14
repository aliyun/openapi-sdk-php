<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeVulExportInfo
 *
 * @method string getSourceIp()
 * @method string getExportId()
 */
class DescribeVulExportInfo extends Rpc
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

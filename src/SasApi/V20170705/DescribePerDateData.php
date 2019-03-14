<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api DescribePerDateData
 *
 * @method string getSourceIp()
 * @method string getApiType()
 */
class DescribePerDateData extends Rpc
{
    public $product = 'Sas-api';

    public $version = '2017-07-05';

    public $method = 'POST';

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
     * @param string $apiType
     *
     * @return $this
     */
    public function withApiType($apiType)
    {
        $this->data['ApiType'] = $apiType;
        $this->options['query']['ApiType'] = $apiType;

        return $this;
    }
}

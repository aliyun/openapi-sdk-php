<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeTotalAndRateLine
 *
 * @method string getSourceIp()
 * @method string getApiType()
 */
class DescribeTotalAndRateLine extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sas-api';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'DescribeTotalAndRateLine';

    /**
     * @var string
     */
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

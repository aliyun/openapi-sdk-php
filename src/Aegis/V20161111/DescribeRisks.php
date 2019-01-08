<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeRisks
 *
 * @method string getRiskName()
 * @method string getSourceIp()
 * @method string getLimit()
 * @method string getRiskId()
 */
class DescribeRisks extends RpcRequest
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
    public $action = 'DescribeRisks';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $riskName
     *
     * @return $this
     */
    public function withRiskName($riskName)
    {
        $this->data['RiskName'] = $riskName;
        $this->options['query']['RiskName'] = $riskName;

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
     * @param string $limit
     *
     * @return $this
     */
    public function withLimit($limit)
    {
        $this->data['Limit'] = $limit;
        $this->options['query']['Limit'] = $limit;

        return $this;
    }

    /**
     * @param string $riskId
     *
     * @return $this
     */
    public function withRiskId($riskId)
    {
        $this->data['RiskId'] = $riskId;
        $this->options['query']['RiskId'] = $riskId;

        return $this;
    }
}

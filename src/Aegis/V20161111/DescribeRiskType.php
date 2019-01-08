<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeRiskType
 *
 * @method string getSourceIp()
 * @method string getStrategyId()
 * @method string getUuids()
 */
class DescribeRiskType extends RpcRequest
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
    public $action = 'DescribeRiskType';

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
     * @param string $strategyId
     *
     * @return $this
     */
    public function withStrategyId($strategyId)
    {
        $this->data['StrategyId'] = $strategyId;
        $this->options['query']['StrategyId'] = $strategyId;

        return $this;
    }

    /**
     * @param string $uuids
     *
     * @return $this
     */
    public function withUuids($uuids)
    {
        $this->data['Uuids'] = $uuids;
        $this->options['query']['Uuids'] = $uuids;

        return $this;
    }
}

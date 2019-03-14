<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api BatchDeleteWhiteList
 *
 * @method string getRiskIdList()
 * @method string getSourceIp()
 */
class BatchDeleteWhiteList extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $riskIdList
     *
     * @return $this
     */
    public function withRiskIdList($riskIdList)
    {
        $this->data['RiskIdList'] = $riskIdList;
        $this->options['query']['RiskIdList'] = $riskIdList;

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
}

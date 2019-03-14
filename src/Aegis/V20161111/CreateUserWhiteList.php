<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api CreateUserWhiteList
 *
 * @method string getRiskIdList()
 * @method string getReason()
 * @method string getSourceIp()
 */
class CreateUserWhiteList extends Rpc
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
     * @param string $reason
     *
     * @return $this
     */
    public function withReason($reason)
    {
        $this->data['Reason'] = $reason;
        $this->options['query']['Reason'] = $reason;

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

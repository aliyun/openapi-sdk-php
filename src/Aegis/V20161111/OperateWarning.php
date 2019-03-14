<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api OperateWarning
 *
 * @method string getReason()
 * @method string getSourceIp()
 * @method string getOperateType()
 * @method string getRiskWarningIds()
 */
class OperateWarning extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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

    /**
     * @param string $operateType
     *
     * @return $this
     */
    public function withOperateType($operateType)
    {
        $this->data['OperateType'] = $operateType;
        $this->options['query']['OperateType'] = $operateType;

        return $this;
    }

    /**
     * @param string $riskWarningIds
     *
     * @return $this
     */
    public function withRiskWarningIds($riskWarningIds)
    {
        $this->data['RiskWarningIds'] = $riskWarningIds;
        $this->options['query']['RiskWarningIds'] = $riskWarningIds;

        return $this;
    }
}

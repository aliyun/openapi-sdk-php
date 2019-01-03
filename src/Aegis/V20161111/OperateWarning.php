<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OperateWarning
 *
 * @method string getReason()
 * @method string getSourceIp()
 * @method string getOperateType()
 * @method string getRiskWarningIds()
 */
class OperateWarning extends RpcRequest
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
    public $action = 'OperateWarning';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withReason() instead.
     *
     * @param string $reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        return $this->withReason($reason);
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
     * @deprecated deprecated since version 2.0, Use withOperateType() instead.
     *
     * @param string $operateType
     *
     * @return $this
     */
    public function setOperateType($operateType)
    {
        return $this->withOperateType($operateType);
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
     * @deprecated deprecated since version 2.0, Use withRiskWarningIds() instead.
     *
     * @param string $riskWarningIds
     *
     * @return $this
     */
    public function setRiskWarningIds($riskWarningIds)
    {
        return $this->withRiskWarningIds($riskWarningIds);
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

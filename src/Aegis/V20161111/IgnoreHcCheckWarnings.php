<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of IgnoreHcCheckWarnings
 *
 * @method string getReason()
 * @method string getSourceIp()
 * @method string getCheckWarningIds()
 * @method string getRiskId()
 * @method string getType()
 */
class IgnoreHcCheckWarnings extends RpcRequest
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
    public $action = 'IgnoreHcCheckWarnings';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $checkWarningIds
     *
     * @return $this
     */
    public function withCheckWarningIds($checkWarningIds)
    {
        $this->data['CheckWarningIds'] = $checkWarningIds;
        $this->options['query']['CheckWarningIds'] = $checkWarningIds;

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

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }
}

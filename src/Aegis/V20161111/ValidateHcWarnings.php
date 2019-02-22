<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ValidateHcWarnings
 *
 * @method string getRiskIds()
 * @method string getSourceIp()
 * @method string getUuids()
 */
class ValidateHcWarnings extends RpcRequest
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
    public $action = 'ValidateHcWarnings';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $riskIds
     *
     * @return $this
     */
    public function withRiskIds($riskIds)
    {
        $this->data['RiskIds'] = $riskIds;
        $this->options['query']['RiskIds'] = $riskIds;

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

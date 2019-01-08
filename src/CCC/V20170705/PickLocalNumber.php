<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PickLocalNumber
 *
 * @method string getInstanceId()
 * @method array getCandidateNumber()
 * @method string getCalleeNumber()
 */
class PickLocalNumber extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'PickLocalNumber';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param array $candidateNumber
     *
     * @return $this
     */
    public function withCandidateNumber(array $candidateNumber)
    {
        $this->data['CandidateNumber'] = $candidateNumber;
        foreach ($candidateNumber as $i => $iValue) {
            $this->options['query']['CandidateNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $calleeNumber
     *
     * @return $this
     */
    public function withCalleeNumber($calleeNumber)
    {
        $this->data['CalleeNumber'] = $calleeNumber;
        $this->options['query']['CalleeNumber'] = $calleeNumber;

        return $this;
    }
}

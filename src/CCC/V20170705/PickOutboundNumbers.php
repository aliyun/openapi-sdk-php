<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api PickOutboundNumbers
 *
 * @method string getInstanceId()
 * @method string getCount()
 * @method array getCandidateNumber()
 * @method string getCalleeNumber()
 */
class PickOutboundNumbers extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

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
     * @param string $count
     *
     * @return $this
     */
    public function withCount($count)
    {
        $this->data['Count'] = $count;
        $this->options['query']['Count'] = $count;

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

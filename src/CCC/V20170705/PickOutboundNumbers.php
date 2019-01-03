<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PickOutboundNumbers
 *
 * @method string getInstanceId()
 * @method string getCount()
 * @method array getCandidateNumber()
 * @method string getCalleeNumber()
 */
class PickOutboundNumbers extends RpcRequest
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
    public $action = 'PickOutboundNumbers';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

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
     * @deprecated deprecated since version 2.0, Use withCount() instead.
     *
     * @param string $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        return $this->withCount($count);
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
     * @deprecated deprecated since version 2.0, Use getCandidateNumber() instead.
     *
     * @return array
     */
    public function getCandidateNumbers()
    {
        return $this->getCandidateNumber();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCandidateNumber() instead.
     *
     * @param array $candidateNumbers
     *
     * @return $this
     */
    public function setCandidateNumbers(array $candidateNumbers)
    {
        return $this->withCandidateNumber($candidateNumbers);
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
     * @deprecated deprecated since version 2.0, Use withCalleeNumber() instead.
     *
     * @param string $calleeNumber
     *
     * @return $this
     */
    public function setCalleeNumber($calleeNumber)
    {
        return $this->withCalleeNumber($calleeNumber);
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

<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api ListRecordingOfDualTrack
 *
 * @method string getCallingNumber()
 * @method string getAgentId()
 * @method string getInstanceId()
 * @method string getCalledNumber()
 * @method string getPageSize()
 * @method string getStartTime()
 * @method string getStopTime()
 * @method string getConnectId()
 * @method string getPageNumber()
 */
class ListRecordingOfDualTrack extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param string $callingNumber
     *
     * @return $this
     */
    public function withCallingNumber($callingNumber)
    {
        $this->data['CallingNumber'] = $callingNumber;
        $this->options['query']['CallingNumber'] = $callingNumber;

        return $this;
    }

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function withAgentId($agentId)
    {
        $this->data['AgentId'] = $agentId;
        $this->options['query']['AgentId'] = $agentId;

        return $this;
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
     * @param string $calledNumber
     *
     * @return $this
     */
    public function withCalledNumber($calledNumber)
    {
        $this->data['CalledNumber'] = $calledNumber;
        $this->options['query']['CalledNumber'] = $calledNumber;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $stopTime
     *
     * @return $this
     */
    public function withStopTime($stopTime)
    {
        $this->data['StopTime'] = $stopTime;
        $this->options['query']['StopTime'] = $stopTime;

        return $this;
    }

    /**
     * @param string $connectId
     *
     * @return $this
     */
    public function withConnectId($connectId)
    {
        $this->data['ConnectId'] = $connectId;
        $this->options['query']['ConnectId'] = $connectId;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }
}

<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RunCloudMetricProfiling
 *
 * @method string getDuration()
 * @method string getHostName()
 * @method string getProcessId()
 * @method string getFreq()
 * @method string getClusterId()
 */
class RunCloudMetricProfiling extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'RunCloudMetricProfiling';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withDuration() instead.
     *
     * @param string $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        return $this->withDuration($duration);
    }

    /**
     * @param string $duration
     *
     * @return $this
     */
    public function withDuration($duration)
    {
        $this->data['Duration'] = $duration;
        $this->options['query']['Duration'] = $duration;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHostName() instead.
     *
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        return $this->withHostName($hostName);
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function withHostName($hostName)
    {
        $this->data['HostName'] = $hostName;
        $this->options['query']['HostName'] = $hostName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProcessId() instead.
     *
     * @param string $processId
     *
     * @return $this
     */
    public function setProcessId($processId)
    {
        return $this->withProcessId($processId);
    }

    /**
     * @param string $processId
     *
     * @return $this
     */
    public function withProcessId($processId)
    {
        $this->data['ProcessId'] = $processId;
        $this->options['query']['ProcessId'] = $processId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFreq() instead.
     *
     * @param string $freq
     *
     * @return $this
     */
    public function setFreq($freq)
    {
        return $this->withFreq($freq);
    }

    /**
     * @param string $freq
     *
     * @return $this
     */
    public function withFreq($freq)
    {
        $this->data['Freq'] = $freq;
        $this->options['query']['Freq'] = $freq;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }
}

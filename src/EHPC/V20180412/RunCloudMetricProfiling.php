<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api RunCloudMetricProfiling
 *
 * @method string getDuration()
 * @method string getHostName()
 * @method string getProcessId()
 * @method string getFreq()
 * @method string getClusterId()
 */
class RunCloudMetricProfiling extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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

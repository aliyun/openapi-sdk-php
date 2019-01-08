<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetJobStatusByCallId
 *
 * @method string getCallId()
 * @method string getInstanceId()
 */
class GetJobStatusByCallId extends RpcRequest
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
    public $action = 'GetJobStatusByCallId';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $callId
     *
     * @return $this
     */
    public function withCallId($callId)
    {
        $this->data['CallId'] = $callId;
        $this->options['query']['CallId'] = $callId;

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
}

<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetContactIdentifyByOutBoundTaskId
 *
 * @method string getInstanceId()
 * @method string getOutboundTaskId()
 */
class GetContactIdentifyByOutBoundTaskId extends RpcRequest
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
    public $action = 'GetContactIdentifyByOutBoundTaskId';

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
     * @param string $outboundTaskId
     *
     * @return $this
     */
    public function withOutboundTaskId($outboundTaskId)
    {
        $this->data['OutboundTaskId'] = $outboundTaskId;
        $this->options['query']['OutboundTaskId'] = $outboundTaskId;

        return $this;
    }
}

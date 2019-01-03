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
     * @deprecated deprecated since version 2.0, Use withOutboundTaskId() instead.
     *
     * @param string $outboundTaskId
     *
     * @return $this
     */
    public function setOutboundTaskId($outboundTaskId)
    {
        return $this->withOutboundTaskId($outboundTaskId);
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

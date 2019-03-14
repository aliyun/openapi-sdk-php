<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api GetContactIdentifyByOutBoundTaskId
 *
 * @method string getInstanceId()
 * @method string getOutboundTaskId()
 */
class GetContactIdentifyByOutBoundTaskId extends Rpc
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

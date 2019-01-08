<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListPhoneNumbers
 *
 * @method string getOutboundOnly()
 * @method string getInstanceId()
 */
class ListPhoneNumbers extends RpcRequest
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
    public $action = 'ListPhoneNumbers';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $outboundOnly
     *
     * @return $this
     */
    public function withOutboundOnly($outboundOnly)
    {
        $this->data['OutboundOnly'] = $outboundOnly;
        $this->options['query']['OutboundOnly'] = $outboundOnly;

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

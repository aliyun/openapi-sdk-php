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
     * @deprecated deprecated since version 2.0, Use withOutboundOnly() instead.
     *
     * @param string $outboundOnly
     *
     * @return $this
     */
    public function setOutboundOnly($outboundOnly)
    {
        return $this->withOutboundOnly($outboundOnly);
    }

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
}

<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api PublishContactFlowVersion
 *
 * @method string getInstanceId()
 * @method string getContactFlowVersionId()
 */
class PublishContactFlowVersion extends Rpc
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
     * @param string $contactFlowVersionId
     *
     * @return $this
     */
    public function withContactFlowVersionId($contactFlowVersionId)
    {
        $this->data['ContactFlowVersionId'] = $contactFlowVersionId;
        $this->options['query']['ContactFlowVersionId'] = $contactFlowVersionId;

        return $this;
    }
}

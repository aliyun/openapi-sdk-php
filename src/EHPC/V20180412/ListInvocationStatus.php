<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListInvocationStatus
 *
 * @method string getClusterId()
 * @method string getCommandId()
 */
class ListInvocationStatus extends RpcRequest
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
    public $action = 'ListInvocationStatus';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

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

    /**
     * @param string $commandId
     *
     * @return $this
     */
    public function withCommandId($commandId)
    {
        $this->data['CommandId'] = $commandId;
        $this->options['query']['CommandId'] = $commandId;

        return $this;
    }
}

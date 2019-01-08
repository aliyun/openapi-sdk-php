<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteFCTrigger
 *
 * @method string getTriggerARN()
 * @method string getOwnerId()
 */
class DeleteFCTrigger extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'DeleteFCTrigger';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $triggerARN
     *
     * @return $this
     */
    public function withTriggerARN($triggerARN)
    {
        $this->data['TriggerARN'] = $triggerARN;
        $this->options['query']['TriggerARN'] = $triggerARN;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}

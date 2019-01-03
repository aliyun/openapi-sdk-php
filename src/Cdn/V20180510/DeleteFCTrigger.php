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
     * @deprecated deprecated since version 2.0, Use withTriggerARN() instead.
     *
     * @param string $triggerARN
     *
     * @return $this
     */
    public function setTriggerARN($triggerARN)
    {
        return $this->withTriggerARN($triggerARN);
    }

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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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

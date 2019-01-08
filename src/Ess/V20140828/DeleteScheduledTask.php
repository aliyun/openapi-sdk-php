<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteScheduledTask
 *
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getScheduledTaskId()
 */
class DeleteScheduledTask extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ess';

    /**
     * @var string
     */
    public $version = '2014-08-28';

    /**
     * @var string
     */
    public $action = 'DeleteScheduledTask';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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

    /**
     * @param string $scheduledTaskId
     *
     * @return $this
     */
    public function withScheduledTaskId($scheduledTaskId)
    {
        $this->data['ScheduledTaskId'] = $scheduledTaskId;
        $this->options['query']['ScheduledTaskId'] = $scheduledTaskId;

        return $this;
    }
}

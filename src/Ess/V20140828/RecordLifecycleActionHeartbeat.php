<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api RecordLifecycleActionHeartbeat
 *
 * @method string getLifecycleActionToken()
 * @method string getResourceOwnerAccount()
 * @method string getHeartbeatTimeout()
 * @method string getLifecycleHookId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class RecordLifecycleActionHeartbeat extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param string $lifecycleActionToken
     *
     * @return $this
     */
    public function withLifecycleActionToken($lifecycleActionToken)
    {
        $this->data['LifecycleActionToken'] = $lifecycleActionToken;
        $this->options['query']['lifecycleActionToken'] = $lifecycleActionToken;

        return $this;
    }

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
     * @param string $heartbeatTimeout
     *
     * @return $this
     */
    public function withHeartbeatTimeout($heartbeatTimeout)
    {
        $this->data['HeartbeatTimeout'] = $heartbeatTimeout;
        $this->options['query']['heartbeatTimeout'] = $heartbeatTimeout;

        return $this;
    }

    /**
     * @param string $lifecycleHookId
     *
     * @return $this
     */
    public function withLifecycleHookId($lifecycleHookId)
    {
        $this->data['LifecycleHookId'] = $lifecycleHookId;
        $this->options['query']['lifecycleHookId'] = $lifecycleHookId;

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
}

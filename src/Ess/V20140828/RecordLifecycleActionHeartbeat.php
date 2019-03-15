<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getLifecycleActionToken()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getHeartbeatTimeout()
 * @method string getLifecycleHookId()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
}

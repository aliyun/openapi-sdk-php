<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CompleteLifecycleAction
 *
 * @method string getLifecycleActionToken()
 * @method string getResourceOwnerAccount()
 * @method string getLifecycleHookId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getLifecycleActionResult()
 */
class CompleteLifecycleAction extends RpcRequest
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
    public $action = 'CompleteLifecycleAction';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withLifecycleActionToken() instead.
     *
     * @param string $lifecycleActionToken
     *
     * @return $this
     */
    public function setLifecycleActionToken($lifecycleActionToken)
    {
        return $this->withLifecycleActionToken($lifecycleActionToken);
    }

    /**
     * @param string $lifecycleActionToken
     *
     * @return $this
     */
    public function withLifecycleActionToken($lifecycleActionToken)
    {
        $this->data['LifecycleActionToken'] = $lifecycleActionToken;
        $this->options['query']['LifecycleActionToken'] = $lifecycleActionToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withLifecycleHookId() instead.
     *
     * @param string $lifecycleHookId
     *
     * @return $this
     */
    public function setLifecycleHookId($lifecycleHookId)
    {
        return $this->withLifecycleHookId($lifecycleHookId);
    }

    /**
     * @param string $lifecycleHookId
     *
     * @return $this
     */
    public function withLifecycleHookId($lifecycleHookId)
    {
        $this->data['LifecycleHookId'] = $lifecycleHookId;
        $this->options['query']['LifecycleHookId'] = $lifecycleHookId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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

    /**
     * @deprecated deprecated since version 2.0, Use withLifecycleActionResult() instead.
     *
     * @param string $lifecycleActionResult
     *
     * @return $this
     */
    public function setLifecycleActionResult($lifecycleActionResult)
    {
        return $this->withLifecycleActionResult($lifecycleActionResult);
    }

    /**
     * @param string $lifecycleActionResult
     *
     * @return $this
     */
    public function withLifecycleActionResult($lifecycleActionResult)
    {
        $this->data['LifecycleActionResult'] = $lifecycleActionResult;
        $this->options['query']['LifecycleActionResult'] = $lifecycleActionResult;

        return $this;
    }
}

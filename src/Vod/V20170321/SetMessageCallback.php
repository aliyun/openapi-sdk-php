<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetMessageCallback
 *
 * @method string getCallbackType()
 * @method string getAuthKey()
 * @method string getResourceOwnerId()
 * @method string getCallbackSwitch()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getEventTypeList()
 * @method string getAuthSwitch()
 * @method string getCallbackURL()
 * @method string getOwnerId()
 */
class SetMessageCallback extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'SetMessageCallback';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @deprecated deprecated since version 2.0, Use withCallbackType() instead.
     *
     * @param string $callbackType
     *
     * @return $this
     */
    public function setCallbackType($callbackType)
    {
        return $this->withCallbackType($callbackType);
    }

    /**
     * @param string $callbackType
     *
     * @return $this
     */
    public function withCallbackType($callbackType)
    {
        $this->data['CallbackType'] = $callbackType;
        $this->options['query']['CallbackType'] = $callbackType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAuthKey() instead.
     *
     * @param string $authKey
     *
     * @return $this
     */
    public function setAuthKey($authKey)
    {
        return $this->withAuthKey($authKey);
    }

    /**
     * @param string $authKey
     *
     * @return $this
     */
    public function withAuthKey($authKey)
    {
        $this->data['AuthKey'] = $authKey;
        $this->options['query']['AuthKey'] = $authKey;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCallbackSwitch() instead.
     *
     * @param string $callbackSwitch
     *
     * @return $this
     */
    public function setCallbackSwitch($callbackSwitch)
    {
        return $this->withCallbackSwitch($callbackSwitch);
    }

    /**
     * @param string $callbackSwitch
     *
     * @return $this
     */
    public function withCallbackSwitch($callbackSwitch)
    {
        $this->data['CallbackSwitch'] = $callbackSwitch;
        $this->options['query']['CallbackSwitch'] = $callbackSwitch;

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
     * @deprecated deprecated since version 2.0, Use withEventTypeList() instead.
     *
     * @param string $eventTypeList
     *
     * @return $this
     */
    public function setEventTypeList($eventTypeList)
    {
        return $this->withEventTypeList($eventTypeList);
    }

    /**
     * @param string $eventTypeList
     *
     * @return $this
     */
    public function withEventTypeList($eventTypeList)
    {
        $this->data['EventTypeList'] = $eventTypeList;
        $this->options['query']['EventTypeList'] = $eventTypeList;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAuthSwitch() instead.
     *
     * @param string $authSwitch
     *
     * @return $this
     */
    public function setAuthSwitch($authSwitch)
    {
        return $this->withAuthSwitch($authSwitch);
    }

    /**
     * @param string $authSwitch
     *
     * @return $this
     */
    public function withAuthSwitch($authSwitch)
    {
        $this->data['AuthSwitch'] = $authSwitch;
        $this->options['query']['AuthSwitch'] = $authSwitch;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCallbackURL() instead.
     *
     * @param string $callbackURL
     *
     * @return $this
     */
    public function setCallbackURL($callbackURL)
    {
        return $this->withCallbackURL($callbackURL);
    }

    /**
     * @param string $callbackURL
     *
     * @return $this
     */
    public function withCallbackURL($callbackURL)
    {
        $this->data['CallbackURL'] = $callbackURL;
        $this->options['query']['CallbackURL'] = $callbackURL;

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

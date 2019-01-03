<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of VoipGetToken
 *
 * @method string getResourceOwnerId()
 * @method string getVoipId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getDeviceId()
 * @method string getIsCustomAccount()
 */
class VoipGetToken extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dyvmsapi';

    /**
     * @var string
     */
    public $version = '2017-05-25';

    /**
     * @var string
     */
    public $action = 'VoipGetToken';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withVoipId() instead.
     *
     * @param string $voipId
     *
     * @return $this
     */
    public function setVoipId($voipId)
    {
        return $this->withVoipId($voipId);
    }

    /**
     * @param string $voipId
     *
     * @return $this
     */
    public function withVoipId($voipId)
    {
        $this->data['VoipId'] = $voipId;
        $this->options['query']['VoipId'] = $voipId;

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
     * @deprecated deprecated since version 2.0, Use withDeviceId() instead.
     *
     * @param string $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        return $this->withDeviceId($deviceId);
    }

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function withDeviceId($deviceId)
    {
        $this->data['DeviceId'] = $deviceId;
        $this->options['query']['DeviceId'] = $deviceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIsCustomAccount() instead.
     *
     * @param string $isCustomAccount
     *
     * @return $this
     */
    public function setIsCustomAccount($isCustomAccount)
    {
        return $this->withIsCustomAccount($isCustomAccount);
    }

    /**
     * @param string $isCustomAccount
     *
     * @return $this
     */
    public function withIsCustomAccount($isCustomAccount)
    {
        $this->data['IsCustomAccount'] = $isCustomAccount;
        $this->options['query']['IsCustomAccount'] = $isCustomAccount;

        return $this;
    }
}

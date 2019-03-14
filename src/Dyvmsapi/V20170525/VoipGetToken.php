<?php

namespace AlibabaCloud\Dyvmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * Api VoipGetToken
 *
 * @method string getResourceOwnerId()
 * @method string getVoipId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getDeviceId()
 * @method string getIsCustomAccount()
 */
class VoipGetToken extends Rpc
{
    public $product = 'Dyvmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';

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

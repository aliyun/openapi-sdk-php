<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddPipeline
 *
 * @method string getResourceOwnerId()
 * @method string getRole()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getName()
 * @method string getNotifyConfig()
 * @method string getOwnerId()
 * @method string getSpeedLevel()
 * @method string getSpeed()
 */
class AddPipeline extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Mts';

    /**
     * @var string
     */
    public $version = '2014-06-18';

    /**
     * @var string
     */
    public $action = 'AddPipeline';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

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
     * @deprecated deprecated since version 2.0, Use withRole() instead.
     *
     * @param string $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        return $this->withRole($role);
    }

    /**
     * @param string $role
     *
     * @return $this
     */
    public function withRole($role)
    {
        $this->data['Role'] = $role;
        $this->options['query']['Role'] = $role;

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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNotifyConfig() instead.
     *
     * @param string $notifyConfig
     *
     * @return $this
     */
    public function setNotifyConfig($notifyConfig)
    {
        return $this->withNotifyConfig($notifyConfig);
    }

    /**
     * @param string $notifyConfig
     *
     * @return $this
     */
    public function withNotifyConfig($notifyConfig)
    {
        $this->data['NotifyConfig'] = $notifyConfig;
        $this->options['query']['NotifyConfig'] = $notifyConfig;

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
     * @deprecated deprecated since version 2.0, Use withSpeedLevel() instead.
     *
     * @param string $speedLevel
     *
     * @return $this
     */
    public function setSpeedLevel($speedLevel)
    {
        return $this->withSpeedLevel($speedLevel);
    }

    /**
     * @param string $speedLevel
     *
     * @return $this
     */
    public function withSpeedLevel($speedLevel)
    {
        $this->data['SpeedLevel'] = $speedLevel;
        $this->options['query']['SpeedLevel'] = $speedLevel;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSpeed() instead.
     *
     * @param string $speed
     *
     * @return $this
     */
    public function setSpeed($speed)
    {
        return $this->withSpeed($speed);
    }

    /**
     * @param string $speed
     *
     * @return $this
     */
    public function withSpeed($speed)
    {
        $this->data['Speed'] = $speed;
        $this->options['query']['Speed'] = $speed;

        return $this;
    }
}

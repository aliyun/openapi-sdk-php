<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Rpc;

/**
 * Api ModifyUisConnectionAttribute
 *
 * @method string getResourceOwnerId()
 * @method string getUisConnectionId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getSslConfig()
 * @method string getOwnerId()
 * @method string getUisNodeId()
 * @method string getName()
 * @method string getUisProtocol()
 * @method string getGreConfig()
 */
class ModifyUisConnectionAttribute extends Rpc
{
    public $product = 'Uis';

    public $version = '2018-08-21';

    public $method = 'POST';

    public $serviceCode = 'uis';

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
     * @param string $uisConnectionId
     *
     * @return $this
     */
    public function withUisConnectionId($uisConnectionId)
    {
        $this->data['UisConnectionId'] = $uisConnectionId;
        $this->options['query']['UisConnectionId'] = $uisConnectionId;

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
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $sslConfig
     *
     * @return $this
     */
    public function withSslConfig($sslConfig)
    {
        $this->data['SslConfig'] = $sslConfig;
        $this->options['query']['SslConfig'] = $sslConfig;

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
     * @param string $uisNodeId
     *
     * @return $this
     */
    public function withUisNodeId($uisNodeId)
    {
        $this->data['UisNodeId'] = $uisNodeId;
        $this->options['query']['UisNodeId'] = $uisNodeId;

        return $this;
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
     * @param string $uisProtocol
     *
     * @return $this
     */
    public function withUisProtocol($uisProtocol)
    {
        $this->data['UisProtocol'] = $uisProtocol;
        $this->options['query']['UisProtocol'] = $uisProtocol;

        return $this;
    }

    /**
     * @param string $greConfig
     *
     * @return $this
     */
    public function withGreConfig($greConfig)
    {
        $this->data['GreConfig'] = $greConfig;
        $this->options['query']['GreConfig'] = $greConfig;

        return $this;
    }
}

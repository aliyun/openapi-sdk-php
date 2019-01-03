<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateUisConnection
 *
 * @method string getResourceOwnerId()
 * @method string getUisNodeId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getName()
 * @method string getDescription()
 * @method string getUisProtocol()
 * @method string getSslConfig()
 * @method string getOwnerId()
 * @method string getGreConfig()
 */
class CreateUisConnection extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Uis';

    /**
     * @var string
     */
    public $version = '2018-08-21';

    /**
     * @var string
     */
    public $action = 'CreateUisConnection';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'uis';

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
     * @deprecated deprecated since version 2.0, Use withUisNodeId() instead.
     *
     * @param string $uisNodeId
     *
     * @return $this
     */
    public function setUisNodeId($uisNodeId)
    {
        return $this->withUisNodeId($uisNodeId);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withUisProtocol() instead.
     *
     * @param string $uisProtocol
     *
     * @return $this
     */
    public function setUisProtocol($uisProtocol)
    {
        return $this->withUisProtocol($uisProtocol);
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
     * @deprecated deprecated since version 2.0, Use withSslConfig() instead.
     *
     * @param string $sslConfig
     *
     * @return $this
     */
    public function setSslConfig($sslConfig)
    {
        return $this->withSslConfig($sslConfig);
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
     * @deprecated deprecated since version 2.0, Use withGreConfig() instead.
     *
     * @param string $greConfig
     *
     * @return $this
     */
    public function setGreConfig($greConfig)
    {
        return $this->withGreConfig($greConfig);
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

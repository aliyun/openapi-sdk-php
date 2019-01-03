<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateSslVpnServer
 *
 * @method string getCipher()
 * @method string getResourceOwnerId()
 * @method string getClientIpPool()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getCompress()
 * @method string getOwnerAccount()
 * @method string getVpnGatewayId()
 * @method string getOwnerId()
 * @method string getLocalSubnet()
 * @method string getPort()
 * @method string getProto()
 * @method string getName()
 */
class CreateSslVpnServer extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'CreateSslVpnServer';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

    /**
     * @deprecated deprecated since version 2.0, Use withCipher() instead.
     *
     * @param string $cipher
     *
     * @return $this
     */
    public function setCipher($cipher)
    {
        return $this->withCipher($cipher);
    }

    /**
     * @param string $cipher
     *
     * @return $this
     */
    public function withCipher($cipher)
    {
        $this->data['Cipher'] = $cipher;
        $this->options['query']['Cipher'] = $cipher;

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
     * @deprecated deprecated since version 2.0, Use withClientIpPool() instead.
     *
     * @param string $clientIpPool
     *
     * @return $this
     */
    public function setClientIpPool($clientIpPool)
    {
        return $this->withClientIpPool($clientIpPool);
    }

    /**
     * @param string $clientIpPool
     *
     * @return $this
     */
    public function withClientIpPool($clientIpPool)
    {
        $this->data['ClientIpPool'] = $clientIpPool;
        $this->options['query']['ClientIpPool'] = $clientIpPool;

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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCompress() instead.
     *
     * @param string $compress
     *
     * @return $this
     */
    public function setCompress($compress)
    {
        return $this->withCompress($compress);
    }

    /**
     * @param string $compress
     *
     * @return $this
     */
    public function withCompress($compress)
    {
        $this->data['Compress'] = $compress;
        $this->options['query']['Compress'] = $compress;

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
     * @deprecated deprecated since version 2.0, Use withVpnGatewayId() instead.
     *
     * @param string $vpnGatewayId
     *
     * @return $this
     */
    public function setVpnGatewayId($vpnGatewayId)
    {
        return $this->withVpnGatewayId($vpnGatewayId);
    }

    /**
     * @param string $vpnGatewayId
     *
     * @return $this
     */
    public function withVpnGatewayId($vpnGatewayId)
    {
        $this->data['VpnGatewayId'] = $vpnGatewayId;
        $this->options['query']['VpnGatewayId'] = $vpnGatewayId;

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
     * @deprecated deprecated since version 2.0, Use withLocalSubnet() instead.
     *
     * @param string $localSubnet
     *
     * @return $this
     */
    public function setLocalSubnet($localSubnet)
    {
        return $this->withLocalSubnet($localSubnet);
    }

    /**
     * @param string $localSubnet
     *
     * @return $this
     */
    public function withLocalSubnet($localSubnet)
    {
        $this->data['LocalSubnet'] = $localSubnet;
        $this->options['query']['LocalSubnet'] = $localSubnet;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPort() instead.
     *
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port)
    {
        return $this->withPort($port);
    }

    /**
     * @param string $port
     *
     * @return $this
     */
    public function withPort($port)
    {
        $this->data['Port'] = $port;
        $this->options['query']['Port'] = $port;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProto() instead.
     *
     * @param string $proto
     *
     * @return $this
     */
    public function setProto($proto)
    {
        return $this->withProto($proto);
    }

    /**
     * @param string $proto
     *
     * @return $this
     */
    public function withProto($proto)
    {
        $this->data['Proto'] = $proto;
        $this->options['query']['Proto'] = $proto;

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
}

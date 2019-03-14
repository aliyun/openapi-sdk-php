<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api CreateSslVpnServer
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
class CreateSslVpnServer extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

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

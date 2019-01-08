<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteIpv6InternetBandwidth
 *
 * @method string getResourceOwnerId()
 * @method string getIpv6InternetBandwidthId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getIpv6AddressId()
 */
class DeleteIpv6InternetBandwidth extends RpcRequest
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
    public $action = 'DeleteIpv6InternetBandwidth';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

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
     * @param string $ipv6InternetBandwidthId
     *
     * @return $this
     */
    public function withIpv6InternetBandwidthId($ipv6InternetBandwidthId)
    {
        $this->data['Ipv6InternetBandwidthId'] = $ipv6InternetBandwidthId;
        $this->options['query']['Ipv6InternetBandwidthId'] = $ipv6InternetBandwidthId;

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
     * @param string $ipv6AddressId
     *
     * @return $this
     */
    public function withIpv6AddressId($ipv6AddressId)
    {
        $this->data['Ipv6AddressId'] = $ipv6AddressId;
        $this->options['query']['Ipv6AddressId'] = $ipv6AddressId;

        return $this;
    }
}

<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveCommonBandwidthPackageIp
 *
 * @method string getResourceOwnerId()
 * @method string getBandwidthPackageId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getIpInstanceId()
 * @method string getIpVersion()
 * @method string getOwnerId()
 */
class RemoveCommonBandwidthPackageIp extends RpcRequest
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
    public $action = 'RemoveCommonBandwidthPackageIp';

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
     * @param string $bandwidthPackageId
     *
     * @return $this
     */
    public function withBandwidthPackageId($bandwidthPackageId)
    {
        $this->data['BandwidthPackageId'] = $bandwidthPackageId;
        $this->options['query']['BandwidthPackageId'] = $bandwidthPackageId;

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
     * @param string $ipInstanceId
     *
     * @return $this
     */
    public function withIpInstanceId($ipInstanceId)
    {
        $this->data['IpInstanceId'] = $ipInstanceId;
        $this->options['query']['IpInstanceId'] = $ipInstanceId;

        return $this;
    }

    /**
     * @param string $ipVersion
     *
     * @return $this
     */
    public function withIpVersion($ipVersion)
    {
        $this->data['IpVersion'] = $ipVersion;
        $this->options['query']['IpVersion'] = $ipVersion;

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
}

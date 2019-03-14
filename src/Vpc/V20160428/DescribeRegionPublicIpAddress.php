<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api DescribeRegionPublicIpAddress
 *
 * @method string getResourceOwnerId()
 * @method string getKbpsBandwidth()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getOwnerAccount()
 * @method string getResourceUid()
 * @method string getResourceBid()
 * @method string getOwnerId()
 */
class DescribeRegionPublicIpAddress extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

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
     * @param string $kbpsBandwidth
     *
     * @return $this
     */
    public function withKbpsBandwidth($kbpsBandwidth)
    {
        $this->data['KbpsBandwidth'] = $kbpsBandwidth;
        $this->options['query']['KbpsBandwidth'] = $kbpsBandwidth;

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
     * @param string $bandwidth
     *
     * @return $this
     */
    public function withBandwidth($bandwidth)
    {
        $this->data['Bandwidth'] = $bandwidth;
        $this->options['query']['Bandwidth'] = $bandwidth;

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
     * @param string $resourceUid
     *
     * @return $this
     */
    public function withResourceUid($resourceUid)
    {
        $this->data['ResourceUid'] = $resourceUid;
        $this->options['query']['ResourceUid'] = $resourceUid;

        return $this;
    }

    /**
     * @param string $resourceBid
     *
     * @return $this
     */
    public function withResourceBid($resourceBid)
    {
        $this->data['ResourceBid'] = $resourceBid;
        $this->options['query']['ResourceBid'] = $resourceBid;

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

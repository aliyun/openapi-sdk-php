<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Rpc;

/**
 * Api CreateUisNode
 *
 * @method string getResourceOwnerId()
 * @method string getUisNodeBandwidth()
 * @method string getResourceOwnerAccount()
 * @method string getUisNodeAreaId()
 * @method string getOwnerAccount()
 * @method string getUisId()
 * @method string getName()
 * @method string getDescription()
 * @method string getIpAddrsNum()
 * @method string getOwnerId()
 */
class CreateUisNode extends Rpc
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
     * @param string $uisNodeBandwidth
     *
     * @return $this
     */
    public function withUisNodeBandwidth($uisNodeBandwidth)
    {
        $this->data['UisNodeBandwidth'] = $uisNodeBandwidth;
        $this->options['query']['UisNodeBandwidth'] = $uisNodeBandwidth;

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
     * @param string $uisNodeAreaId
     *
     * @return $this
     */
    public function withUisNodeAreaId($uisNodeAreaId)
    {
        $this->data['UisNodeAreaId'] = $uisNodeAreaId;
        $this->options['query']['UisNodeAreaId'] = $uisNodeAreaId;

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
     * @param string $uisId
     *
     * @return $this
     */
    public function withUisId($uisId)
    {
        $this->data['UisId'] = $uisId;
        $this->options['query']['UisId'] = $uisId;

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
     * @param string $ipAddrsNum
     *
     * @return $this
     */
    public function withIpAddrsNum($ipAddrsNum)
    {
        $this->data['IpAddrsNum'] = $ipAddrsNum;
        $this->options['query']['IpAddrsNum'] = $ipAddrsNum;

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

<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateUisNode
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
class CreateUisNode extends RpcRequest
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
    public $action = 'CreateUisNode';

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
     * @deprecated deprecated since version 2.0, Use withUisNodeBandwidth() instead.
     *
     * @param string $uisNodeBandwidth
     *
     * @return $this
     */
    public function setUisNodeBandwidth($uisNodeBandwidth)
    {
        return $this->withUisNodeBandwidth($uisNodeBandwidth);
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
     * @deprecated deprecated since version 2.0, Use withUisNodeAreaId() instead.
     *
     * @param string $uisNodeAreaId
     *
     * @return $this
     */
    public function setUisNodeAreaId($uisNodeAreaId)
    {
        return $this->withUisNodeAreaId($uisNodeAreaId);
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
     * @deprecated deprecated since version 2.0, Use withUisId() instead.
     *
     * @param string $uisId
     *
     * @return $this
     */
    public function setUisId($uisId)
    {
        return $this->withUisId($uisId);
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
     * @deprecated deprecated since version 2.0, Use withIpAddrsNum() instead.
     *
     * @param string $ipAddrsNum
     *
     * @return $this
     */
    public function setIpAddrsNum($ipAddrsNum)
    {
        return $this->withIpAddrsNum($ipAddrsNum);
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
}
